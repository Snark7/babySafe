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
</head>
<body>

<div id="message"></div>
<div>
    Température de la pièce:
    <span id="tempRoom"></span>
</div>
<div>
    Température de bébé:
    <span id="tempBaby"></span>
</div>
<div>
    Humidité de l'air:
    <span id="humidity"></span>
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
