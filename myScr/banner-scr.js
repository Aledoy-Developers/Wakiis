(function () {
  "use strict";
  const img1 = document.getElementById("bannerImg1");
  const img2 = document.getElementById("bannerImg2");
  if (!img1 || !img2) return;

  let isFirstActive = true; // img1 active initially

  function swapBanner() {
    if (isFirstActive) {
      img1.classList.remove("active");
      img2.classList.add("active");
    } else {
      img2.classList.remove("active");
      img1.classList.add("active");
    }
    isFirstActive = !isFirstActive;
  }

  // swap every 2 seconds
  setInterval(swapBanner, 2000);

  // optional double-click to reset (doesn't interfere)
  const frame = document.querySelector(".banner-frame");
  if (frame) {
    frame.addEventListener("dblclick", function () {
      if (!img1.classList.contains("active")) {
        img2.classList.remove("active");
        img1.classList.add("active");
        isFirstActive = true;
      }
    });
  }
})();
