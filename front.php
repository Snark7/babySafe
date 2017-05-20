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

<div id="message"></div>
    <div class="alert alert-warning" role="alert" style="display:none">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <span>Best check yo self, you're not looking too good.</span>
    </div>
    <div class="alert alert-danger" role="alert" style="display:none">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <span>Alert</span>
    </div>


    <div id="tempPieceBlock" class="tile">
        <i class="fa fa-thermometer-half" aria-hidden="true"></i>
        <span>Température de la pièce</span>
        <span class="value" id="tempRoom">25.4</span>
    </div>
    <div id="tempBabyBlock" class="tile">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
        <span>Température de bébé</span>
        <span class="value" id="tempBaby">37.1</span>
    </div>
    <div id="hygroPieceBlock" class="tile">
        <i class="fa fa-tint" aria-hidden="true"></i>
        <span>Humidité de l'air</span>
        <span class="value" id="humidity">45%</span>
    </div>
</div>
<script>
    function onMessage(message) {
        let tmp;
        switch (message.type) {
            case 'tempRoom':
                tmp = 15 + (26 * (message.value / 100));
                $('#tempRoom').text((Math.round(tmp * 10) / 10) + '°');
                break;
            case 'tempBaby':
                tmp = 15 + (26 * (message.value / 100));
                $('#tempBaby').text((Math.round(tmp * 10) / 10) + '°');
                break;
            case 'humidity':
                $('#humidity').text(message.value + '%');
                break;
            case 'message':
                $('#message').text(message.message);
                break;
        }
    }
</script>
</body>
</html>
