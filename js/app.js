const heroTitle = document.querySelector("#heroTitle");
const heroSub = document.querySelector(".headerSubtitle");
const textheroCTA = document.querySelector(".heroCTA");
 
function setTranslate(xPos, yPos, el) {
 el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
}

window.addEventListener("DOMContentLoaded", scrollLoop, false);

let xScrollPosition;
let yScrollPosition;

function scrollLoop() {
  xScrollPosition = window.pageXOffset;
  yScrollPosition = window.pageYOffset;
 
  setTranslate(0, yScrollPosition * -0.2, heroTitle);
  if (heroSub && textheroCTA) {
    setTranslate(0, yScrollPosition * -0.2, heroSub);
    setTranslate(0, yScrollPosition * -0.2, textheroCTA);
  }
 
  requestAnimationFrame(scrollLoop);
}

let index = 0,
    interval = 1000;

const rand = (min, max) => 
  Math.floor(Math.random() * (max - min + 1)) + min;

const animate = star => {
  star.style.setProperty("--star-left", `${rand(-10, 100)}%`);
  star.style.setProperty("--star-top", `${rand(-40, 80)}%`);

  star.style.animation = "none";
  star.offsetHeight;
  star.style.animation = "";
}

for(const star of document.getElementsByClassName("magic-star")) {
  setTimeout(() => {
    animate(star);
    
    setInterval(() => animate(star), 1000);
  }, index++ * (interval / 3))
}


let portfoliosWebsites = Array.from(document.querySelectorAll(".portfolioEx"));

portfoliosWebsites.forEach(website => {
  website.addEventListener("click", function(e) {
      id = e.srcElement.id;
      document.querySelector("#transitionPortfolioImg").classList.add("hover");
      setTimeout(() => {
        document.getElementById("imgWebsiteExample").style.backgroundImage = `url("./assets/portfolio/${id}.webp")`
      }, 800);
      setTimeout(() => {
        document.querySelector("#transitionPortfolioImg").classList.remove("hover");
      },900);
  })
});

document.getElementById("goToMain").addEventListener("click", function(){
  window.scrollTo(0, document.querySelector("header").clientHeight) ;
})

if (document.getElementById("cv")) {
  document.getElementById("cv").addEventListener("click", function(){
    window.open("../assets/CV Nesta Loisy.pdf", "_blank");
  })
}

let networks = Array.from(document.querySelectorAll(".network"));

networks.forEach(network => {
  nsvg = network.childNodes[0];
  nsvg.addEventListener("click", function(e){
    id = e.srcElement.parentNode.id;
    if (id == "instagram") {
      window.open("https://www.instagram.com/nesta.web/", "_blank");
    }else if (id == "github") {
      window.open("https://github.com/nestaweb", "_blank");
    }else if (id == "linkedin") {
      window.open("https://www.linkedin.com/in/nesta-loisy-99026924a", "_blank");
    }
  })
});

let opinionsContainer = Array.from(document.querySelectorAll(".opinionsContainer"));

if (opinionsContainer) {
  opinionsContainer.forEach(opinionContainer => {
    opinionContainer.addEventListener("mouseover", function() {
      opinionsContainer.forEach(opinionContainer => {
        opinionContainer.style.animationPlayState = "paused";
        console.log("there");
      });
    })

    opinionContainer.addEventListener("mouseleave", function() {
      opinionsContainer.forEach(opinionContainer => {
        opinionContainer.style.animationPlayState = "running";
        console.log("there");
      });
    })
  });
}


function getContent() {
  gets = Array.from(document.querySelectorAll(".get"));

  gets.forEach(get => {
    doc = get.id;
    path = get_path();
    get.setAttribute("src", path + "assets/" + doc + ".webp"); 
  });
}