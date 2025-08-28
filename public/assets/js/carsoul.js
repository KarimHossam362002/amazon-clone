// Dynamic carousel initialization
function initializeCarousels() {
  const carousels = {};
  const carouselContainers = document.querySelectorAll(".carousel-container");

  carouselContainers.forEach((container, index) => {
    const carouselId = `carousel${index + 1}`;
    const carouselElement = container.querySelector(".carousel");

    carousels[carouselId] = {
      element: carouselElement,
      leftArrow: container.querySelector(".carousel-arrow.left"),
      rightArrow: container.querySelector(".carousel-arrow.right"),
      currentIndex: 0,
      itemsPerSlide: 4,
      itemCount: carouselElement.querySelectorAll(".product-card").length,
      slideCount: Math.ceil(
        carouselElement.querySelectorAll(".product-card").length / 4
      ),
    };

    // Set up event listeners
    carousels[carouselId].leftArrow.addEventListener("click", () =>
      moveSlide(carouselId, -1)
    );
    carousels[carouselId].rightArrow.addEventListener("click", () =>
      moveSlide(carouselId, 1)
    );

    updateArrows(carouselId);
  });

  return carousels;
}

// Store carousel states globally
let carousels = {};

// Update arrows based on current position
function updateArrows(carouselId) {
  const carousel = carousels[carouselId];
  if (!carousel) return;

  carousel.leftArrow.disabled = carousel.currentIndex === 0;
  carousel.rightArrow.disabled =
    carousel.currentIndex >= carousel.slideCount - 1;
}

// Move carousel by a number of slides
function moveSlide(carouselId, direction) {
  const carousel = carousels[carouselId];
  if (!carousel) return;

  const newIndex = carousel.currentIndex + direction;

  if (newIndex >= 0 && newIndex < carousel.slideCount) {
    carousel.currentIndex = newIndex;
    const scrollAmount =
      carousel.element.querySelector(".product-card").offsetWidth *
      carousel.itemsPerSlide *
      carousel.currentIndex;
    carousel.element.style.transform = `translateX(-${scrollAmount}px)`;
    updateArrows(carouselId);
  }
}

// Handle window resize for all carousels
function handleResize() {
  Object.keys(carousels).forEach((carouselId) => {
    const carousel = carousels[carouselId];
    const width = window.innerWidth;
    let newItemsPerSlide = 4;

    if (width <= 1024) newItemsPerSlide = 3;
    if (width <= 768) newItemsPerSlide = 2;
    if (width <= 480) newItemsPerSlide = 1;

    if (newItemsPerSlide !== carousel.itemsPerSlide) {
      carousel.itemsPerSlide = newItemsPerSlide;
      carousel.slideCount = Math.ceil(
        carousel.itemCount / carousel.itemsPerSlide
      );
      carousel.currentIndex = Math.min(
        carousel.currentIndex,
        carousel.slideCount - 1
      );
      const scrollAmount =
        carousel.element.querySelector(".product-card").offsetWidth *
        carousel.itemsPerSlide *
        carousel.currentIndex;
      carousel.element.style.transform = `translateX(-${scrollAmount}px)`;
      updateArrows(carouselId);
    }
  });
}

// Initialize all carousels when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  carousels = initializeCarousels();
  window.addEventListener("resize", handleResize);
});
