function mouseFollower(e) {
    var containerElement = document.getElementById("mouse-follower");
    var containerCoorY   = containerElement.offsetTop;
    var containerCoorX   = containerElement.offsetLeft;
    var containerHeight  = containerElement.offsetHeight;
    
    var x1 = e.clientX - containerCoorX - 200;
    var y1 = -(e.clientY - containerCoorY - containerHeight + 200);
    var c1 = Math.sqrt(x1 * x1 + y1 * y1);
    
    var x2 = e.clientX - containerCoorX - 150;
    var y2 = -(e.clientY - containerCoorY - containerHeight + 200);
    var c2 = Math.sqrt(x2 * x2 + y2 * y2);

    var eyeRadius = 10;
    
    var eyeX = (eyeRadius*x1)/(c1);
    var eyeY = Math.sqrt(eyeRadius * eyeRadius - eyeX * eyeX);
    eyeY = y1 >= 0 ? eyeY : -(eyeY);

    var eye1X = (eyeRadius*x2)/(c2);
    var eye1Y = Math.sqrt(eyeRadius * eyeRadius - eyeX * eyeX);
    eye1Y = y2 >= 0 ? eye1Y : -(eye1Y);

    document.getElementById("eye1").style.bottom = eyeY + 200 + "px";
    document.getElementById("eye1").style.left   = eyeX + 200 + "px";

    document.getElementById("eye2").style.bottom = eye1Y + 200 + "px";
    document.getElementById("eye2").style.left   = eye1X + 150 + "px";
}