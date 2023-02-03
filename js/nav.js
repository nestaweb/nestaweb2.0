let navLinks = Array.from(document.querySelectorAll(".linkNav"));

navLinks.forEach(navLink => {
    navLink.addEventListener("click", function(e){
        id = e.srcElement.id;
        if (id == "42") {
            window.open("https://42angouleme.fr/", "_blank");
            return (1);
        }
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

if ((window.location.href).split("/")[(window.location.href).split("/").length - 1] == "pricing.php") {
    console.log(document.querySelector("header").clientHeight);
    window.addEventListener("scroll", function(){
        if (window.scrollY >= document.querySelector("header").clientHeight - 50) {
            document.getElementById("topNavBar").classList.add("black");
        }else if (document.getElementById("topNavBar").classList.contains("black")){
            document.getElementById("topNavBar").classList.remove("black");
        }
    })
}