Modules.arduino = {
    start: function() {

        /*
        $(".button-arduino").on('tap click', function(e) {
            e.preventDefault();

            //ratchet.emit('arduino', {command: $(this).attr('data-value')});
            $("#corAtual").html($(this).attr('data-value'));
            objEnviar = {};
            objEnviar.command = $(this).attr('data-value');
            objEnviar.type = 'arduino';
            Arduino.conn.send(JSON.stringify(objEnviar));

            $(".button-arduino").attr('disabled', 'disabled');
            $(".button-arduino").addClass('classGray');
            window.setTimeout(function() {
                $(".button-arduino").removeAttr('disabled');
                $(".button-arduino").removeClass('classGray');
            }, 2500);
        });

        Arduino.conn = new WebSocket('ws://piresedias.com.br:8888');
        Arduino.conn.onopen = function(e) {
            console.log("Websocket Server Arduino OK!");
        };

        Arduino.conn.onmessage = function(e) {

            data = JSON.parse(e.data);
            if (data.type == 'arduino') {

                $(".button-arduino").attr('disabled', 'disabled');

                $(".button-arduino").addClass('classGray');
                $("#corAtual").html(data.command);

                window.setTimeout(function() {
                    $(".button-arduino").removeAttr('disabled');
                    $(".button-arduino").removeClass('classGray');
                }, 2500);

            }
        };

        ratchet.on(1, this.callback);
         */
    },
    callback: function(data) {
        if (data.type == 'arduino') {
            $("#corAtual").html(data.command);

        }
    },
}