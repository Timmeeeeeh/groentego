var fase = 0;

function allowDrop(event) {
    event.preventDefault();
}
function drag(event, id) {
    var img1 = document.getElementById(id);
    event.dataTransfer.setData("osaicon", img1.id);
    img1.style.opacity = 0;
}
function drop(event) {
    var data = event.dataTransfer.getData("osaicon");
    console.log(event.target.nodeName)
    if ( event.target.nodeName !== "IMG" ) {
        event.target.appendChild(document.getElementById(data));
    }
}
function show(id) {
    var img1 = document.getElementById(id);
    img1.style.opacity = 3;
}




function changeImage(pic){
    if(pic=="1")
        document.getElementById("zaadje1").src="Afbeeldingen/plantje_fase_2.png";
    else if(pic=="2")
        document.getElementById("zaadje1").src="Afbeeldingen/plantje_fase_1.png";

}


/*function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}


document.getElementById("div3").addEventListener("dragstop", function(e) {
    var img = document.createElement("img");
    img.src = "http://kryogenix.org/images/hackergotchi-simpler.png";
    e.dataTransfer.setDragImage(img, 0, 0);
}, false);

/*var width = window.innerWidth;
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

/*
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

*/