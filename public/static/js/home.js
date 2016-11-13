$(document).ready(function () {
    getEvents();
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
                    $(o).attr('src',(dta[i]['cover']));
                    $(o).parent('a').attr('href','coming_events?event=' + dta[i]['id']);
                }else{
                    $(o).parent('.event-block').css('visibility','hidden');
                }
            })
        }

    });
}
