<script>
  window.onload = function () {
    var reactCanvas = document.getElementById('react-sonho'),
        ctx = reactCanvas.getContext('2d'),
        drawing = false;
    window.toDraw = new Array;
    window.toDrawReceived = new Array;

    var radius = 10;

    window.drawCircle = function (context, x, y) {
      context.fillStyle = '#fff';

      context.beginPath();
      context.moveTo(x, y);
      context.arc(x, y, radius, 0, 2 * Math.PI, false);
      context.fill();
    };

    function toggleDrawing (evt) {
      drawing = !drawing;
      evt.preventDefault();
    }

    window.addEventListener('mouseup', toggleDrawing);
    window.addEventListener('mousedown', toggleDrawing);

    reactCanvas.addEventListener('mousemove', function (e) {
      if (!drawing) return;

      toDraw.push({
        x: e.offsetX + 30,
        y: e.layerY + 30
      });
    });

    setInterval(function () {
      if (window.drawingWs && toDraw.length) {
        window.drawingWs.send(JSON.stringify({
          type: 'coords',
          coords: toDraw
        }));
      }

      var draw = toDraw.concat(toDrawReceived);
      toDrawReceived = new Array;
      toDraw = new Array;

      for (var i in draw) {
        var coords = draw[i];
        drawCircle(ctx, coords.x, coords.y);

        draw.splice(draw.indexOf(coords), 1);
      }
    }, 300);

    window.drawingWs = new WebSocket('ws://'+websocketsAddress);
    window.drawingWs.onopen = function () {
      window.onresize();
    };

    window.drawingWs.onmessage = function (e) {
      var msg = JSON.parse(e.data);

      if (msg.type == 'coords') {
        toDrawReceived = toDrawReceived.concat(msg.coords);
      }
    };

    window.onresize = function () {
      reactCanvas.width = 600;
      reactCanvas.height = 800;
    };

  };
</script>