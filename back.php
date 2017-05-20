<html>
<head>
    <link href="/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/src/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="back.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/src/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/back.css" />
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
    :
    <div id="sliderHum"></div>
</div>
<script>
    $(function () {
        $("#sliderRoom").slider({
            change: function (e, ui) {
                sendMessage({type: 'tempRoom', value: ui.value});
            },
            value : 40
        });

        $("#sliderBaby").slider({
            change: function (e, ui) {
                sendMessage({type: 'tempBaby', value: ui.value});
            },
            value : 85
        });
        $("#sliderHum").slider({
            change: function (e, ui) {
                sendMessage({type: 'humidity', value: ui.value});
            },
            value : 45
        });
    });
</script>

</body>
</html>
