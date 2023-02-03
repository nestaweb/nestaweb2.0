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