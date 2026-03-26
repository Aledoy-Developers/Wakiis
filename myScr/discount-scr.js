// Function to handle the fade transition
function startImageTransition() {
  const image2 = document.querySelector(".image-2");

  // Initial delay before first fade (optional)
  setTimeout(() => {
    // Start the interval for fading
    setInterval(() => {
      // Toggle the visible class on image 2
      image2.classList.toggle("visible");

      // Note: The transition works because image-1 is always visible,
      // and image-2 fades in and out on top of it
    }, 2000); // 3 second interval
  }, 2000); // Wait 3 seconds before starting the first fade
}

// Wait for both images to load before starting transitions
const images = document.querySelectorAll(".image");
let loadedCount = 0;

images.forEach((image) => {
  // Check if image is already loaded
  if (image.complete) {
    loadedCount++;
    if (loadedCount === images.length) {
      startImageTransition();
    }
  } else {
    // Wait for image to load
    image.addEventListener("load", () => {
      loadedCount++;
      if (loadedCount === images.length) {
        startImageTransition();
      }
    });
  }
});

// Error handling for images that fail to load
images.forEach((image) => {
  image.addEventListener("error", () => {
    console.error("Failed to load image:", image.src);
    // Replace with fallback image or continue with loaded images
    image.src = "https://via.placeholder.com/600x400?text=Image+Not+Available";
  });
});

// Optional: Add manual controls (click to toggle)
const container = document.querySelector(".image-container");
container.addEventListener("click", () => {
  const image2 = document.querySelector(".image-2");
  image2.classList.toggle("visible");
});
