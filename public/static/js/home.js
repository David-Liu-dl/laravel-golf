/**
 * Created by yuhaoliu on 8/10/2016.
 */
$(function () {
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

    $('#btn-left').unbind("click").click(function () {
        moveToPrevious();
    });
    $('#btn-right').unbind("click").click(function () {
        moveToNext();
    });

    // check if video is loaded
    function checkVideoLoaded(){
        setTimeout(function () {
            if ( $('#bgvid').get(0).readyState === 4 ) {
                //start sliding
                recurse(0);

                $("body").mousemove(function(event){
                    hide_show()
                });

                //show enquiry window for once
                setTimeout(function () {
                    showEnquiryWindow();
                }, 5 * 1000);
            }else {
                checkVideoLoaded();
            }
        }, 200)
    }

    checkVideoLoaded();

    function recurse(counter) {
        // get the colour
        var duration = 10000;
        var item = items[counter];
        nowIndex = counter;
        // animate it
        $(item).addClass('active');

        if($(item).find('#bgvid').length){
            var video = $(item).find('#bgvid').get(0);
            duration = video.duration;
            duration = (duration + 1) * 1000;
            video.play();
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
