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