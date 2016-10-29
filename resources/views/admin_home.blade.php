<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/main.css">

</head>
<body>

<div class="container">
    <h3>Tooltip Example</h3>
    <p>The data-placement attribute specifies the tooltip position.</p>
    <ul class="list-inline">
        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Bottom</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!">Left</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a></li>
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>

