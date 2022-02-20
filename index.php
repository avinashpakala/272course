<?php
  echo "This is my firt test php for CMPE 272 class..!"
?>

<!DOCTYPE html>
<html>
<body>

<canvas id="myCanvas" width="400" height="300"
style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.beginPath();
ctx.arc(95, 50, 40, 0, 2 * Math.PI);
ctx.stroke();

ctx.fillRect(0,110,80,75);
ctx.fillRect(80,75,150,155)
</script>

</body>
</html>