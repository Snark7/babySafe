<html>
<head>
    <!-- Bootstrap -->
    <link href="/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/src/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front.js"></script>
    <link rel="stylesheet" type="text/css" href="/src/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/front.css" />
    <meta name="viewport" content="width=device_display, initial-scale=1.0" />
</head>
<body>
<div class="main" role="main">
    <div class="logo">
        <img src="/src/50ndg/img/logo.png">
    </div>

    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <span>Best check yo self, you're not looking too good.</span>
    </div>
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <span>Alert</span>
    </div>
</div>
<script>
    function onMessage(message) {
        $('body').text(message.message);
    }
</script>
</body>
</html>
