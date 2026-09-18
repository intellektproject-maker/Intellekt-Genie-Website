document.addEventListener("DOMContentLoaded", function () {
  const tabsContainer = document.querySelector(".sigma-tabs");
  const tabs = tabsContainer
    ? Array.from(tabsContainer.querySelectorAll(".sigma-tab-item"))
    : [];
  const tabContents = tabsContainer
    ? Array.from(tabsContainer.querySelectorAll(".sigma-tab-content"))
    : [];

  // Initialize only the Company Profile Vision/Mission/Quality tabs.
  if (
    !tabsContainer ||
    tabs.length < 2 ||
    !document.querySelector("#sigma-content-one") ||
    !document.querySelector("#sigma-content-two") ||
    !document.querySelector("#sigma-content-three")
  ) {
    return;
  }

  let currentIndex = Math.max(
    0,
    tabs.findIndex((tab) => tab.classList.contains("active"))
  );
  let slideshowTimer;
  const slideDuration = 6000;

  function showSlide(index) {
    currentIndex = (index + tabs.length) % tabs.length;

    tabs.forEach((tab, tabIndex) => {
      tab.classList.toggle("active", tabIndex === currentIndex);
    });

    tabContents.forEach((content) => {
      content.classList.remove("active");
    });

    const targetSelector = tabs[currentIndex].dataset.tab;
    const targetContent = document.querySelector(targetSelector);

    if (targetContent) {
      targetContent.classList.add("active");
    }
  }

  function restartSlideshow() {
    window.clearInterval(slideshowTimer);
    slideshowTimer = window.setInterval(() => {
      showSlide(currentIndex + 1);
    }, slideDuration);
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
      showSlide(index);
      restartSlideshow();
    });
  });

  showSlide(currentIndex);
  restartSlideshow();
});
