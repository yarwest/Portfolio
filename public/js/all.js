/* Opens overlay by setting display to 'block', also calls assign function for overlay-img*/
function openOverlay(ID) {
    document.getElementById('overlay').style.display="block";
    document.getElementById('overlay-img').src='../images/portfolio/' + ID;
}

/* Closes overlay by setting display to 'none' */
function closeOverlay() {
    document.getElementById('overlay').style.display="none";
}