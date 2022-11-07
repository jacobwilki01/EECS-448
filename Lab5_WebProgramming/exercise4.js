

function colorizer() {
    var bordR = document.getElementById("bord-red").value;
    var bordG = document.getElementById("bord-green").value;
    var bordB = document.getElementById("bord-blue").value;
    var bordWidth = document.getElementById("bord-width").value;

    var bgR = document.getElementById("back-red").value;
    var bgG = document.getElementById("back-green").value;
    var bgB = document.getElementById("back-blue").value;

    document.getElementById("para").style.backgroundColor = 'rgb('+bgR+','+bgG+','+bgB+')';
    document.getElementById("para").style.border = bordWidth + ' solid '+ 'rgb(' + bordR + ',' + bordG + ',' + bordB + ')';
}
