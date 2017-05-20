function init() {
    setInterval(function () {
        $.ajax({
            method:   'GET',
            url:      '/read.php',
            dataType: 'json',
            success:  function (e) {
                for (var i in e) {
                    onMessage(JSON.parse(e[i]));
                }
            }
        });
    }, 400);
}

init();
