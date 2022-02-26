
<!DOCTYPE html>
<html>
<body>

<canvas id="myCanvas" width="400" height="300"
>
Your browser does not support the canvas element.
</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

// Face
ctx.beginPath();
ctx.arc(200, 100, 50, 0, 2 * Math.PI);
ctx.stroke();

//Eyes
ctx.beginPath();
    ctx.moveTo(220, 85);
    ctx.lineTo(230, 100);
    ctx.lineTo(210, 100);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(180, 85);
    ctx.lineTo(190, 100);
    ctx.lineTo(170, 100);
    ctx.closePath();
    ctx.stroke();

  
// Mouth
    ctx.beginPath();
    ctx.arc(212, 120, 10, 0, 2 * Math.PI);
    ctx.stroke();
    
    ctx.beginPath();
    ctx.arc(188, 120, 10, 0, 2 * Math.PI);
    ctx.stroke();

// Left Mustaches
    ctx.beginPath();
    ctx.moveTo(185, 114);
    ctx.lineTo(165, 110);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(185, 118);
    ctx.lineTo(165, 120);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(185, 122);
    ctx.lineTo(165, 130);
    ctx.closePath();
    ctx.stroke();
    
//Right Mustaches 
    ctx.beginPath();
    ctx.moveTo(215, 114);
    ctx.lineTo(235, 110);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(215, 118);
    ctx.lineTo(235, 120);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(215, 122);
    ctx.lineTo(235, 130);
    ctx.closePath();
    ctx.stroke();
   
   
    //Belly
    ctx.beginPath();
    ctx.moveTo(200, 150);
    ctx.lineTo(275, 250);
    ctx.lineTo(125, 250);
    ctx.closePath();
    ctx.stroke();

// Legs
ctx.beginPath();
    ctx.moveTo(240, 250);
    ctx.lineTo(250, 265);
    ctx.lineTo(230, 265);
    ctx.closePath();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(170, 250);
    ctx.lineTo(180, 265);
    ctx.lineTo(160, 265);
    ctx.closePath();
    ctx.stroke();

   // Tail
    ctx.beginPath();
    ctx.moveTo(250, 218);
    ctx.lineTo(320, 180);
    ctx.closePath();
    ctx.stroke();

  //Left Ear
    ctx.beginPath();
    ctx.moveTo(165, 62);
    ctx.lineTo(170, 40);
    ctx.lineTo(175, 58);
    ctx.closePath();
    ctx.stroke(); 

 //Right Ear
    ctx.beginPath();
    ctx.moveTo(235, 62);
    ctx.lineTo(230, 40);
    ctx.lineTo(225, 58);
    ctx.closePath();
    ctx.stroke();    

</script>
</body>
</html>
