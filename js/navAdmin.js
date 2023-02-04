let navLinks = Array.from(document.querySelectorAll(".linkNavAdmin"));

navLinks.forEach(navLink => {
    navLink.addEventListener("click", function(e){
        id = e.srcElement.id;
        inTransition();
        setTimeout(() => {
            window.location.href = "./" + navLink.id + ".php";
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
    window.addEventListener("scroll", function(){
        if (window.scrollY >= document.querySelector("header").clientHeight - 50) {
            document.getElementById("topNavBar").classList.add("black");
        }else if (document.getElementById("topNavBar").classList.contains("black")){
            document.getElementById("topNavBar").classList.remove("black");
        }
    })
}