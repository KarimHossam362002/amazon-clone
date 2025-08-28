let index = 0;
const slider = document.getElementById("slider");
const totalSlides = slider.children.length;

function showSlide(i) {
  index = (i + totalSlides) % totalSlides;
  slider.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
  showSlide(index + 1);
}

function prevSlide() {
  showSlide(index - 1);
}

// Optional: Auto slide every 5s
setInterval(nextSlide, 5000);
