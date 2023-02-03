const heroTitle = document.querySelector("#heroTitle");
const heroSub = document.querySelector(".headerSubtitle");
const textheroCTA = document.querySelector("#heroCTA");
 
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
