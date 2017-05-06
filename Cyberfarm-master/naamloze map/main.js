

var width = window.innerWidth;
var height = window.innerHeight;
function drawImage(imageObj) {
    var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
    });
    var layer = new Konva.Layer();
    // darth vader
    var darthVaderImg = new Konva.Image({
        image: imageObj,
        x: 7,
        y: 100,
        width: 200,
        height: 137,
        draggable: true
    });
    // add cursor styling
    darthVaderImg.on('mouseover', function() {
        document.body.style.cursor = 'pointer';
    });
    darthVaderImg.on('mouseout', function() {
        document.body.style.cursor = 'default';
    });
    layer.add(darthVaderImg);
    stage.add(layer);
}
var imageObj = new Image();
imageObj.onload = function() {
    drawImage(this);
};
imageObj.src = 'Afbeeldingen/aardbei_zaad.png';


function myFunction(e) {
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor;
}

function clearCoor() {
    document.getElementById("demo").innerHTML = "";
}

function myFunction() {
    document.getElementById("text").style.color = "red";
}

