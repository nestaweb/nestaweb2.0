let navLinks = Array.from(document.querySelectorAll(".linkNav"));

navLinks.forEach(navLink => {
    navLink.addEventListener("click", function(e){
        id = e.srcElement.id;
        if ((window.location.href).split("/")[(window.location.href).split("/").length - 2] == "src" && id != "index") {
            path = "./";
        } else if ((window.location.href).split("/")[(window.location.href).split("/").length - 2] == "src" && id == "index") {
            path = "../";
        } else if ((window.location.href).split("/")[(window.location.href).split("/").length - 2] != "src" && id != "index") {
            path = "./src/";
        } else if ((window.location.href).split("/")[(window.location.href).split("/").length - 2] != "src" && id == "index") {
            path = "./";
        }
        inTransition();
        setTimeout(() => {
            window.location.href = path + navLink.id + ".php";
        }, 1000);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        outTransition();
    }, 300);
});

function inTransition() {
    document.getElementById("transition").classList.remove("transitionning");
}
  
function outTransition() {
    document.getElementById("transition").classList.add("transitionning");
}