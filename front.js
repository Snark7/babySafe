function init() {
    setInterval(function () {
        $.ajax({
            method:   'GET',
            url:      '/read.php',
            dataType: 'json',
            success:  function (e) {
                for (let i in e) {
                    onMessage(JSON.parse(e[i]));
                }
            }
        });
    }, 400);
}

function onMessage(message) {
    $('body').text(message.message);
}


init();
