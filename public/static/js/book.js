/**
 * Created by yuhaoliu on 2/11/2016.
 */
function showBookWindow() {
    if (!$('#book_window').is(":visible")){
        $('#book_window').fadeIn();
        getOrder();
    }
}

function hideBookWindow(){
    $('#book_window').slideUp(200);
}

function showFdWindow(){
    if ($('#book_window').is(":visible")){
        $('#book_window').fadeOut(100,function () {
            $('#fd-window').fadeIn(200);
        });
    }
}

function hideFdWindowAndRefresh() {
    location.reload();
}

function getOrder() {
    $.ajax({
        url: '/getUnavailableDates',
        method: 'GET',
        dataType: 'json',
        success: function (msg) {
            render(msg);
        }
    });
}

function render(info) {
    $("#datepicker").datepicker(
        {
            minDate: 0,
            maxDate: "+6M",
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesMin: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"],
            dateFormat: 'yy-mm-dd',
            onSelect: function () {
                var selected = $(this).val();
                $('#selected-date').val(selected);
                var selectDayData = getSelectedDayData(selected, info);
                insertSlots(selectDayData);
                var selectedDates = [];
                $(".block.selected").each(function () {
                    selectedDates.push($(this).data('date'));
                });

                var available_count = getAvailableSlot(selectDayData).length;
                //important!!
                setTimeout(
                    function() {
                        $('.ui-state-active').attr(
                            {
                                'data-toggle':'tooltip',
                                'title':available_count + ' Available' ,
                                'data-placement':'top',
                            });
                        $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
                    },
                    50);
            },
        });

    //perform today clicked
    $(".ui-datepicker-current-day").trigger("click");

    $("#order-form").validate({
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
                number:true
            },
            email: {
                required: true,
                email:true
            },
            selected_blocks:{
                required: true,
            }

        },
        messages: {
            name: {
                required: "Please enter name",
            },
            phone: {
                required: "Please enter phone",
                number: "Please enter correct phone"
            },
            email: {
                required: "Please enter email",
                email:"Your email address must be in the format of name@domain.com"
            },
            selected_blocks:{
                required: "Please at least select one slot",
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url:"/orders",
                data:$(form).serialize(),
                type:"post",
                success: function(data,status){
                    $('#book_window').slideUp(200);
                    showFdWindow();
                },
                error: function(data,status,error){
                    hideFdWindowAndRefresh();
                }
            });
        }
    });

};

function getAvailableSlot(slots){
    var result = [];
    $.each(slots, function (index, slot) {
        if(slot['availability']){
            result.push(slot);
        }
    });

    return result;
}

function slotsToJson(selectedDates){
    var slots = [];
    $.each(selectedDates, function (index, value) {
        slots.push(value.toString());
    })

    var dateJSON = new Object();
    dateJSON.slots = slots;


    var json = JSON.stringify(dateJSON);
    return json;
}

function insertSlots(slots) {
    $('#blocks').fadeOut(function () {
        $(this).empty();
        $.each(slots, function (index, slot) {
            var $div = $("<div>", {
                id: "slot_" + index,
                class: "block unselected",
                css: {
                    "cursor": "pointer"
                },
                text: moment(new Date(slot['slot'])).format('h:mm a')
                + " - "
                + moment((new Date(slot['slot'])).setHours(
                    slot['slot'].getHours() + 1
                )).format('h:mm a')
            });

            $div.data('date', slot['slot']);

            if (slot['availability']){
                $div.click(function () {
                    if ($(this).hasClass('selected')){
                        $(this).removeClass('selected');
                        $(this).addClass('unselected');
                    }else{
                        $(this).removeClass('unselected');
                        $(this).addClass('selected');
                    }

                    var selectedDates = [];
                    $(".block.selected").each(function () {
                        selectedDates.push($(this).data('date'));
                    });

                    $('#selected_blocks').val(selectedDates.length > 0 ? slotsToJson(selectedDates):null);
                    $("#order-form").valid();
                });

            }else{
                $div.addClass('disable');
            }
            $('#blocks').append($div);
        });
        $(this).fadeIn();
    });
}

function getSelectedDayData(selected, info) {
    var schedule = info['schedule'];
    var ordersDate = info['booked_date'];
    var slot_availability = [];
    var startDate = new Date(selected);
    var dayOfWeek = startDate.getDay();
    var slots = createDaysTimeSlots(selected);
    var isOpen = 0;
    var openAt = '00:00:00';
    var closeAt = '00:00:00';
    if(schedule[dayOfWeek]){
        isOpen = schedule[dayOfWeek]['availability'];
        openAt = schedule[dayOfWeek]['open_at'].split(':')[0];
        closeAt = schedule[dayOfWeek]['close_at'].split(':')[0];
    }
    
    var isOpenBL = isOpen == 1;
   
    closeAt = closeAt == 0 ? 24 : closeAt;

    $.each(slots, function (index, value) {
        var booked = false;

        if (isOpenBL) {
            var time = value.getTime();
            var hour = value.getHours();

            if (time < (new Date()).getTime()) {
                booked = true;
            } else {
                var isInOpen = hour >= openAt && hour < closeAt;

                if (!isInOpen) {
                    booked = true;
                } else {
                    var count = ordersDate.reduce(function (n, innerValue) {
                        return n + ((new Date(innerValue['date'])).getTime() == time);
                    }, 0);
                    booked = count >= 4;
                }
            }
        }else{
            booked = true;
        }

        slot_availability.push({'slot': value, 'availability': (!booked)});

    });

    return slot_availability;
}

function createDaysTimeSlots(selected) {
    var slots = [];
    var startDate = new Date(selected);
    startDate.setHours(12);
    startDate.setMinutes(0);

    for (i = 0; i < 12; i++) {
        var newSlot = new Date(startDate);
        newSlot.setHours(startDate.getHours() + i);
        slots.push(newSlot);
    }

    return slots;
}