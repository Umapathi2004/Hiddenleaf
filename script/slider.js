let currentSlide = 0;

function startSlider() {
  let imageCount = document.querySelectorAll("li");

  if (imageCount.length === 0) {
    imageCount = document.querySelectorAll("li");
    images.style.transform = `translateX(0px)`;
    return;
  }

  let images = document.querySelector("ul");
  images.style.transform = `translateX(-${currentSlide * 100}vw)`;

  if (currentSlide === imageCount.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
}

setInterval(() => {
  startSlider();
}, 5000);

