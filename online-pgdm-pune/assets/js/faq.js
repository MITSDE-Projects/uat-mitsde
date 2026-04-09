
document.querySelectorAll(".stepFaqQuestion").forEach(btn => {
  btn.addEventListener("click", () => {
    const item = btn.parentElement;

    item.classList.toggle("active");
  });
});
