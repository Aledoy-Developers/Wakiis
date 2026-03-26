(function () {
  const faqItems = document.querySelectorAll(".faq-item");

  // helper to close all except the current one (optional accordion feel)
  function closeOthers(current) {
    faqItems.forEach((item) => {
      if (item !== current) {
        item.classList.remove("active");
        const q = item.querySelector(".faq-question");
        if (q) q.setAttribute("aria-expanded", "false");
      }
    });
  }

  faqItems.forEach((item) => {
    const questionDiv = item.querySelector(".faq-question");
    questionDiv.setAttribute("aria-expanded", "false");

    questionDiv.addEventListener("click", function (e) {
      e.stopPropagation();
      const wasActive = item.classList.contains("active");

      // if you want only one open at a time, uncomment next line:
      closeOthers(item);

      if (!wasActive) {
        item.classList.add("active");
        questionDiv.setAttribute("aria-expanded", "true");
      } else {
        // if active, clicking closes it (toggle)
        item.classList.remove("active");
        questionDiv.setAttribute("aria-expanded", "false");
      }
    });

    // keyboard support
    questionDiv.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        questionDiv.click();
      }
    });
  });
})();
