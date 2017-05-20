<html>
<head>
    <link href="/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/src/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="back.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/src/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/back.css"/>
</head>
<body>

<button onclick="sendMessage({type: 'message', message:'Bébé est content'})">Content</button>
<button onclick="sendMessage({type: 'message', message:'Bébé est triste'})">triste</button>
<button onclick="sendMessage({type: 'message', message:'Bébé est mort'})">pleure</button>

<div>
    Temperature de la pièce:
    <div id="sliderRoom"></div>
</div>
<div>
    Temperature de bébé:
    <div id="sliderBaby"></div>
</div>
<div>
    Humidité de l'air:
    <div id="sliderHum"></div>
</div>
<div>
    Bruit:
    <div id="sliderNoise"></div>
</div>
<script>
    $(function () {
        $("#sliderRoom").slider({
            value : 40,
            change: function (e, ui) {
                sendMessage({type: 'tempRoom', value: ui.value});
            }
        });

        $("#sliderBaby").slider({
            value : 85,
            change: function (e, ui) {
                sendMessage({type: 'tempBaby', value: ui.value});
            }
        });
        $("#sliderHum").slider({
            value : 45,
            change: function (e, ui) {
                sendMessage({type: 'humidity', value: ui.value});
            }
        });
        $("#sliderNoise").slider({
            min: 40,
            max: 130,
            value: 70,
            change: function (e, ui) {
                sendMessage({type: 'noise', value: ui.value});
            }
        });

        setInterval(function() {
            let value = $("#sliderNoise").slider( "option", "value" );
            value += Math.round((Math.random()*10)-5);
            sendMessage({type: 'noise', value: value});
        }, 400);
    });
</script>

</body>
</html>
