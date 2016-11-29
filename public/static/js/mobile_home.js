/**
 * Created by yuhaoliu on 8/10/2016.
 */
$(function () {
    var screenH = $(window).outerHeight();
    var headerH = $('#header').outerHeight();
    var footerH = $('#footer2').outerHeight();

    function getMinHeight(){
        return screenH - (headerH + footerH);
    }

    $('#main').css("min-height", getMinHeight());
    $('.cb-slideshow').css({"max-height":(screenH-headerH),overflow:"hidden"});
    $('.cb-slideshow .bg').css({"width":"100%"});
    $('.slide-item .text-part').css({"bottom":$('#footer2').outerHeight() + 10});

    var items = $('.slide-item').toArray();
    var timer;
    var clickTimer;

    var nowIndex;

    getEvents();

    $('ul.navbar-nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    //for mobile swipe
    $(document).on("swiperight",function(){
        moveToNext();
    });
    $(document).on("swipeleft",function(){
        moveToPrevious();
    });

    recurse(0);

    function recurse(counter) {
        // get the colour
        var duration = 1000000;
        var item = items[counter];
        nowIndex = counter;
        // animate it
        $(item).addClass('active');

        if($(item).find('#bgvid').length){
            duration = $(item).find('#bgvid').get(0).duration;
            duration = duration * 1000;
        }
        // run it again for the next number
        timer = setTimeout(function() {
            $(item).removeClass("active");
            var nextIndex = nowIndex + 1;
            nextIndex = nextIndex > (items.length - 1)? 0 : nextIndex;
            recurse(nextIndex);
        }, duration);
        // start it for the first number.
    }

    function moveToNext() {
        if(timer){
            clearTimeout(timer);
            timer = null;
        }
        var nowItem = items[nowIndex];

        $(nowItem).removeClass("active");

        var nextIndex = nowIndex + 1;
        nextIndex = nextIndex > (items.length - 1)? 0 : nextIndex;

        recurse(nextIndex);
    }

    function moveToPrevious() {
        if(timer){
            clearTimeout(timer);
            timer = null;
        }
        var nowItem = items[nowIndex];
        $(nowItem).removeClass("active");

        var nextIndex = nowIndex - 1;
        nextIndex = nextIndex < 0 ? (items.length - 1) : nextIndex;

        recurse(nextIndex);
    }

    function hide_show(){
        show_control();
        clearTimeout(clickTimer);
        clickTimer = setTimeout(hide_control,2000);
    }

    function show_control(){
        $('#control-icon').find('span').css('visibility','visible');
    }

    function hide_control(){
        $('#control-icon').find('span').css('visibility','hidden');
    }

});

function getEvents() {
    $.ajax({
        url: '/getAllAvailableEvents',
        method: 'GET',
        dataType: 'json',
        success: function (dta) {
            if (!dta) {
                return;
            }

            var eventImageContainer = $('.event-cover');

            $.each(eventImageContainer, function (i,o) {
                if(i < dta.length){
                    $(o).attr('src',(dta[i]['coverImg']));
                    $(o).parent('a').attr('href','coming_events?event=' + dta[i]['id']);
                }else{
                    $(o).parent('.event-block').css('visibility','hidden');
                }
            })
        }

    });
}
