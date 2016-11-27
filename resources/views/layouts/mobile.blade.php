<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/reset.css">
    {{--<link rel="stylesheet" href="static/css/frame.css">--}}
    <link rel="stylesheet" href="static/css/frame_mobile.css">
    {{--<link rel="stylesheet" href="static/css/contactus.css">--}}
</head>
<body>
<!--------nav start-------->

<div id="book_window">
    <form id="order-form" target="_self" class="form-horizontal" role="form" method="POST">
        <div id="form_container">
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div id="title_block" class="row" style="overflow: hidden">
                <div class="col-xs-10 vcenter" >
                    TOURNAMENT BOOKING
                </div>
                <div class="col-xs-2 vcenter" style="text-align: right;padding: 0px;">
                    <a href="#" onClick="hideBookWindow();">
                        <i style="padding:0px;font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
            <div id="info-container">
                <div style="margin:20px 0px;">
                {{--left--}}
                    <div id="datepicker_block">
                        <div class="form-group">
                            <input id="selected-date" name="selected-date" type="hidden" class="form-control"
                                   value="<?php echo date('Y-m-d'); ?>">
                            <div id="datepicker"></div>
                        </div>

                        <div class="form-group">
                            <input id="selected_blocks" name="selected_blocks" type="text" class="form-control">
                            <div id="block_container">
                                <div id="blocks"></div>
                            </div>
                        </div>
                    </div>
                    {{--right--}}
                    <div id="user_info_block">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12" style="text-align: center;margin-top: 10px;" >
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="radio" name="hand" value="lefthand" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> LEFT HAND</span>
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name="hand" value="righthand"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> RIGHT HAND</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top:20px;margin-bottom: 20px;font-size:13px;">
                            <div class="col-xs-12">
                                Please enter your name and contact detail to confirm the booking session.
                            </div>
                        </div>

                        <div class="form-group row">
                            <label name="name" class="col-xs-2 col-form-label">Name:</label>
                            <div class="col-xs-10">
                                <input type="text" name="name" class="form-control transparent-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xs-2 col-form-label">Phone:</label>
                            <div class="col-xs-10">
                                <input name="phone" type="text" class="form-control transparent-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xs-2 col-form-label">Email:</label>
                            <div class="col-xs-10">
                                <input name="email" type="email" class="form-control transparent-input" aria-describedby="emailHelp">

                            </div>
                        </div>

                        <div>
                            <button style="margin-top:20px;float:right;font-size:15px;padding:10px 10px;" id="submit" type="submit" class="btnCustom gold-btn">REQUEST BOOKING</button>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>

    </form>
</div>

<!--------nav end-------->

<!--------footer end-------->
<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script src="static/js/moment.min.js"></script>
<script src="/static/js/moment.min.js"></script>
<script src="static/js/book.js"></script>
<script src="static/js/contactus.js"></script>
<script>
    $(document).ready(function () {
        getOrder();
    })
</script>
</body>
</html>