let navLinks = Array.from(document.querySelectorAll(".linkNav"));

navLinks.forEach(navLink => {
    navLink.addEventListener("click", function(e){
        id = e.target.id;
        if (id == "42") {
            window.open("https://42angouleme.fr/", "_blank");
            return (1);
        }
        inTransition();
        setTimeout(() => {
            path = get_path()
            window.location.href = path + "components/plane.php?page=" + navLink.id;
        }, 1000);
    });
});

function get_path() {
    path = "./";
    hrefPath = (window.location.href).split('/');
    originPath = (window.location.origin).split('/');
  
    if (!hrefPath[hrefPath.length - 1]) {
        hrefPath.pop();
    }
  
    while (verifPath(hrefPath, originPath) == 0) {
        path += "../";
        hrefPath.pop();
    }
    return (path);
}

function verifPath(hrefPath, originPath) {
    i = 0;
    find = 1;
    while (i < hrefPath.length) {
        if (hrefPath[i] != originPath[i])
            find = 0;
        i++;
    }
    return (find);
}

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        getContent();
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