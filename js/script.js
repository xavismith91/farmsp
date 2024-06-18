const btnleft = document.querySelector(".btnleft"),
      btnright = document.querySelector(".btnright"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

function moveToRight() {
  slider.style.transform = "translate(-33.3%)"
}

function moveToLeft() {

}