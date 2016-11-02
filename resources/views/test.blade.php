<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    {{--<link rel="stylesheet" href="static/css/main.css">--}}
    {{--<link rel="stylesheet" href="static/css/reset.css">--}}
    {{--<link rel="stylesheet" href="static/css/style.css">--}}
    <link rel="stylesheet" href="static/css/frame.css">
    <link rel="stylesheet" href="static/css/jquery.jqzoom.css">

</head>
<body>

{{--<div id="fixed-frame" class="">--}}
    {{--<a href="static/images/logo.png" id="jqzoom" title="我的背包">--}}
        {{--<img class="price-img" src="static/images/logo.png" width="100px" data-action="zoom">--}}
    {{--</a>--}}
{{--</div>--}}
            <a href="static/images/even-cover.jpg" id="jqzoom" title="我的背包">
                <img src="static/images/even-cover.jpg" width="100px">
            </a>

{{--<img src="static/images/even-cover.jpg" width="100px">--}}

<script src="static/js/jquery.min.js"></script>
<script src="static/js/jquery.jqzoom.js"></script>
{{--<script src="static/js/book.js"></script>--}}
<script>
    $(document).ready(function () {

        var options =
        {
            zoomWidth: 250, //放大镜的宽度
            zoomHeight: 250,//放大镜的高度
            zoomType:'reverse'
        };
        $("#jqzoom").jqzoom(options);
    });
</script>
</body>
</html>

