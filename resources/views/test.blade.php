<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CockDetail</title>
    <!-- Latest compiled and minified CSS -->
{{--<link rel="stylesheet" href="static/css/bootstrap.css">--}}
{{--<link rel="stylesheet" href="static/css/bootstrap-theme.min.css">--}}
<!--<link rel="stylesheet" href="static/css/main.css">-->
    {{--<link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">--}}
    {{--<link rel="stylesheet" href="static/css/animation.css">--}}
    {{--<link rel="stylesheet" href="static/css/reset.css">--}}
    {{--<link rel="stylesheet" href="static/css/style.css">--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    {{--<link rel="stylesheet" href="static/css/main.css">--}}
    {{--<link rel="stylesheet" href="static/css/contactus.css">--}}
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

        /*.ui-datepicker .ui-datepicker-calendar .ui-datepicker-unselectable:hover {*/
        /*background-color: red;*/
        /*cursor: default;*/
        /*}*/

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

<form method="POST">
    <div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>

    <div class="form-group">
        <input id="selected-date" name="selected-date" type="hidden" class="form-control" value="<?php echo date('Y-m-d'); ?>">
        <div id="datepicker"></div>
    </div>

    <div class="form-group">
        <div id="datepicker"></div>
        {{--<input id="selected-blocks" name="selected-blocks" type="hidden" class="form-control" value="">--}}
    </div>

    <div>
        {{--@foreach($ordersDate as $orderDate)--}}
            {{--<p>This is user {{ $orderDate }}</p>--}}
        {{--@endforeach--}}
    </div>
    <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>

{{--<div>--}}
{{--<form method="POST">--}}
{{--<div>--}}
{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label name="name">Name:</label>--}}
{{--<input type="text" name="name" class="form-control">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Phone:</label>--}}
{{--<input name="phone" type="text" class="form-control">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Email:</label>--}}
{{--<input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label>Handside:</label>--}}
{{--<select name="hand" class="form-control">--}}
{{--<option>Left Hand</option>--}}
{{--<option>Right Hand</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--<button type="submit" class="btn btn-primary form-control">Submit</button>--}}
{{--</form>--}}
{{--</div>--}}


<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

{{--<script src="static/js/main.js"></script>--}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {

        var ordersDate = <?php echo json_encode($ordersDate); ?>;

        $("#datepicker").datepicker(
            {
                minDate: 0,
                maxDate: "+2M",
                dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                dayNamesMin: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"],
                dateFormat: 'yy-mm-dd',
                beforeShow:function(input, inst){
                },
                onSelect: function(){
                    var selected = $(this).val();
                    $('#selected-date').val(selected);
                    getSelectedDaysData(selected,ordersDate);
                },
            });

    });

    function getSelectedDaysData(selected, ordersDate) {
        var slots = createDaysTimeSlots(selected);

//        $.each(slots,function (index, value) {
//            console.log(value);
//        });

        $.each(ordersDate,function (index, value) {
            console.log(value);
        });
    }

    function createDaysTimeSlots(selected){
        var slots = [];
        var startDat = new Date(selected);
        startDat.setHours(8);
        startDat.setMinutes(0);

        for(i=0;i<5;i++){
            var newSlot = new Date(startDat);
            newSlot.setHours(startDat.getHours()+i);
            slots.push(newSlot);
        }

//        console.log(slots);
        return slots;
    }
</script>
</body>
</html>