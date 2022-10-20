import scrollTopButton from "./btn-scroll.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {

  scrollTopButton(".scroll-top-btn");
  scrollTopButton(".scroll-top-btn2");

});

window.addEventListener('load',e=>{

  fadeOutEffect('preloader');

});


function fadeOutEffect(target) {
  let fadeTarget = document.getElementById(target);
  let fadeEffect = setInterval(function () {

      if (!fadeTarget.style.opacity) {
          fadeTarget.style.opacity = 1;
      }
      if (fadeTarget.style.opacity > 0) {
          fadeTarget.style.opacity -= 0.1;
      } else {
          clearInterval(fadeEffect);
          document.getElementById("preloader").remove();
      }

  }, 200);
}






