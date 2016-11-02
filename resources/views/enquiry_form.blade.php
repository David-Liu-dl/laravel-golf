<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CockDetail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <style>

        #enquiry_window{
            -moz-border-radius: 6px;
            border-radius: 6px;
            background: white;
            width: 20%;
            max-width: 700px;
            min-width: 400px;
            padding:10px 20px;
        }

        #form_container label{
            color:#b5a37e;
        }

        .input-group-addon,input.transparent-input{
            background-color:rgba(0,0,0,0) !important;
            border:none;
            color:black;
        }

        #enquiry_window .input-group-addon{
            color: #cfb154;
        }

        label.btn span {
            font-size: 1.5em ;
        }

        #enquiry_form_title{
            text-align: center;
            font-size: 20px;
            color:#b5a37e;
        }

        .input_container{
            width:100%;
            padding:5px 5px;
            margin:10px 0px;
            border:1px solid #cfb154;
            border-radius: 6px;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100%;
        }

        .btn-full{
            width:100%;
            background: #cfb154;
            font-weight: bold;
            color: white;
        }

        .input-group-addon{
            width: 23%;
        }

        .bootstrap-select.btn-group .dropdown-toggle .filter-option{
            text-overflow:ellipsis;
            width: 95%;
        }
    </style>
</head>

<body id="contact-body">
<div id="enquiry_window">
    <form id="enquiry_form" class="" role="form" method="POST">
        <div id="form_container" >
            <div id="enquiry_form_title">ENQUIRY</div>

            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">NAME </span>
                <input type="text" name="rg-from" class="form-control transparent-input">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">EMAIL </span>
                <input type="text" name="rg-from" class="form-control transparent-input">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">PHONE </span>
                <input type="text" name="rg-from" class="form-control transparent-input">
            </div>

            <div class="">
                <select class="selectpicker" title="WHICH PART WOULD YOU LIKE TO ENQUIRE" multiple>
                    <option value="tournament">tournament</option>
                    <option value="event">event</option>
                    <option value="academy">academy</option>
                    <option value="four">Four</option>
                    <option value="golf & cocktail bar">golf & cocktail bar</option>
                </select>
            </div>

            <div class="input_container">
                <textarea type="text" name="" class="form-control transparent-input" style="border:none;height: 100px;resize: none;"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-default btn-full">Submit</button>
            </div>

        </div>
    </form>
</div>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
{{--<script src="static/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="static/js/moment.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

<script>

    $(document).ready(function () {
    });


</script>

</body>
</html>