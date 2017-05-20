<html>
<head>
    <!-- Bootstrap -->
    <link href="/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/src/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front.js"></script>
    <link rel="stylesheet" type="text/css" href="/src/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/src/50ndg/css/front.css"/>
    <meta name="viewport" content="width=device_display, initial-scale=1.0"/>
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

    <div id="humorBlock" class="tile">
        <i class="fa" aria-hidden="true"></i>
        <span>Humeur de bébé</span>
        <span class="value" id="babyHumor">Bonne</span>
    </div>

    <div id="tempBabyBlock" class="tile">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
        <span>Température de bébé</span>
        <span class="value" id="tempBaby">37.1</span>
    </div>

    <div id="tempPieceBlock" class="tile">
        <i class="fa fa-thermometer-half" aria-hidden="true"></i>
        <span>Température de la pièce</span>
        <span class="value" id="tempRoom">25.4</span>
    </div>

    <div id="hygroPieceBlock" class="tile">
        <i class="fa fa-tint" aria-hidden="true"></i>
        <span>Humidité de l'air</span>
        <span class="value" id="humidity">45%</span>
    </div>
    <div id="noiseBlock" class="tile">
        <i class="fa fa-volume-up" aria-hidden="true"></i>
        <span>Bruits de bébé</span>
        <span class="value" id="noise">70 dB</span>
    </div>
</div>
<script>
    function setColor(block, color) {
        let oldColor = block.data('color');
        if (oldColor !== color) {
            block
                .removeClass(oldColor)
                .addClass(color)
                .data('color', color);
        }
    }

    function onMessage(message) {
        let tmp, color;
        switch (message.type) {
            case 'tempRoom':
                tmp = 15 + (26 * (message.value / 100));
                $('#tempRoom').text((Math.round(tmp * 10) / 10) + '°');
                break;
            case 'tempBaby':
                tmp = 15 + (26 * (message.value / 100));
                $('#tempBaby').text((Math.round(tmp * 10) / 10) + '°');

                color = '';
                if (tmp > 35.5) {
                    color = 'green';
                }
                if (tmp > 37.5) {
                    color = 'orange';
                }
                if (tmp > 38) {
                    color = 'red';
                }
                setColor($('#tempBabyBlock'), color);

                break;
            case 'humidity':
                $('#humidity').text(message.value + '%');
                break;
            case 'noise':
                color = '';
                if (message.value > 60) {
                    color = 'orange';
                }
                if (message.value > 80) {
                    color = 'red';
                }

                setColor($('#noiseBlock'), color);

                $('#noise')
                    .text(message.value + ' dB');

                break;
            case 'message':
                $('#message').text(message.message);
                break;
            case 'humor':
                $('#babyHumor').text(message.message);
                setColor($('#humorBlock'), message.color);
                let item = $('#humorBlock').find('i');
                item.removeClass('fa-'+item.data('icon'));
                item.addClass('fa-'+message.icon).data('icon', message.icon);
                break;
        }
    }

    onMessage({type: 'tempRoom', value: 40});
    onMessage({type: 'humidity', value: 45});
    onMessage({type: 'tempBaby', value: 85});
    onMessage({type: 'humor', message:'Bonne', icon:'smile-o', color: 'green'});
    //    onMessage({type:'tempRoom',value:25.4});
</script>
</body>
</html>
