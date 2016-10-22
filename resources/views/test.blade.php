<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CockDetail</title>
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <style>
        .ui-state-default {
            background: transparent;
            border: 0px !important;
            text-align: center;
        }

        .ui-datepicker {
            width: 21em;
            background: transparent;
            border: 1px solid #555;
            color: #cfb154;
        }

        .ui-datepicker .ui-datepicker-calendar td span {
            text-align: center;

        }

        .ui-datepicker .ui-datepicker-calendar td {
            background: transparent;
        }

        .ui-datepicker .ui-datepicker-calendar td a {
            background: transparent;
            text-align: center;
            text-decoration: none;
            color: #cfb154;
        }

        .ui-state-disabled .ui-state-default {
            background: transparent;
            /*color: red;*/
        }

        .ui-datepicker .ui-datepicker-calendar .ui-state-active {
            background: red;
            border-radius: 50%;
            /*color: red;*/
        }

        .ui-datepicker td span, .ui-datepicker td a {
            padding: 1em;
        }

    </style>
</head>

<body id="contact-body">

<form id="order-form" method="POST">
    <div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    <div class="form-group">
        <label name="name">Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Phone:</label>
        <input name="phone" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label>Handside:</label>
        <select name="hand" class="form-control">
            <option>Left Hand</option>
            <option>Right Hand</option>
        </select>
    </div>

    <div class="form-group">
        <input id="selected-date" name="selected-date" type="hidden" class="form-control"
               value="<?php echo date('Y-m-d'); ?>">
        <div id="datepicker"></div>
    </div>

    <div class="form-group">
        <input id="selected_blocks" name="selected_blocks" type="hidden" class="form-control" value="">
        <div id="blocks"></div>
    </div>

    <button id="submit" type="submit" class="btn btn-primary form-control">Submit</button>
</form>

<script src="static/js/util.js"></script>
<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/moment.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

<script src="static/js/jquery.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    $(document).ready(function () {
        getOrder();
    });

    function getOrder() {
        $.ajax({
            url: '/data',
            method: 'GET',
            dataType: 'json',
            data: {username: 'fuck'},

            success: function (msg) {

                render(msg);
            }

        });
    }


    function render(ordersDate) {


        $("#datepicker").datepicker(
                {
                    minDate: 0,
                    maxDate: "+2M",
                    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    dayNamesMin: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"],
                    dateFormat: 'yy-mm-dd',
                    beforeShow: function (input, inst) {
                    },
                    onSelect: function () {
                        var selected = $(this).val();
                        $('#selected-date').val(selected);
                        insertSlots(getSelectedDayData(selected, ordersDate));

                        var selectedDates = [];
                        $(".block.selected").each(function () {
                            selectedDates.push($(this).data('date'));
                        });
                        $('#selected_blocks').val(slotsToJson(selectedDates));
                    },
                });


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
                    required:true,
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
                var selectedDates = [];
                $(".block.selected").each(function () {
                    selectedDates.push($(this).data('date'));
                });
                $('#selected_blocks').val(slotsToJson(selectedDates));
                $(form).ajaxSubmit({
                    url:"/",
                    type:"post",
                    success: function(data,status){
                        alert(data);
                    }
                });
            }
        });
    };

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
        $('#blocks').empty();
        $.each(slots, function (index, slot) {
            var $div = $("<div>", {
                id: "slot_" + index,
                class: "block unselected",
                css: {
                    "background": "gray",
                    "cursor": "pointer"
                },
                text: moment(new Date(slot['slot'])).format('h:mm a')
                + " - "
                + moment((new Date(slot['slot'])).setHours(
                        slot['slot'].getHours() + 1
                )).format('h:mm a')
            });

            $div.data('date', slot['slot']);
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
                $('#selected_blocks').val(slotsToJson(selectedDates));
            });

            $('#blocks').append($div);
        });


    }

    function getSelectedDayData(selected, ordersDate) {
        var slot_availability = [];
        var slots = createDaysTimeSlots(selected);

        $.each(slots, function (index, value) {
            var booked = false;

            if (value.getTime() < (new Date()).getTime()) {
                var booked = true;
            } else {
                $.each(ordersDate, function (innerIndex, innerValue) {
                    var booked_date = new Date(innerValue['date']);
                    if (value.getTime() == booked_date.getTime()) {
                        booked = true;
                        return false;
                    }

                });
            }

            slot_availability.push({'slot': value, 'availability': (!booked)});

        });

        return slot_availability;
    }

    function createDaysTimeSlots(selected) {
        var slots = [];
        var startDate = new Date(selected);
        startDate.setHours(8);
        startDate.setMinutes(0);

        for (i = 0; i < 5; i++) {
            var newSlot = new Date(startDate);
            newSlot.setHours(startDate.getHours() + i);
            slots.push(newSlot);
        }

        return slots;
    }

</script>

</body>
</html>