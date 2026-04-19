document.addEventListener("DOMContentLoaded", () => {
  const guides = document.querySelectorAll(".portfolio_guide_wrap");

  guides.forEach((guide) => {
    const closeButton = guide.querySelector(".portfolio_guide_close");
    const triggerButton = guide.querySelector(".portfolio_guide_trigger");

    requestAnimationFrame(() => {
      guide.classList.add("is-visible");
      guide.classList.remove("is-hidden");
    });

    closeButton?.addEventListener("click", () => {
      guide.classList.add("is-hidden");
      guide.classList.remove("is-visible");
    });

    triggerButton?.addEventListener("click", () => {
      guide.classList.add("is-visible");
      guide.classList.remove("is-hidden");
    });
  });
});
