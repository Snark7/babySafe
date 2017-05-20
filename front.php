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

<script>
    function onMessage(message) {
        $('body').text(message.message);
    }
</script>
</body>
</html>
