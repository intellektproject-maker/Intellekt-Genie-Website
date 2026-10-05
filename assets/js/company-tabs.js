document.addEventListener("DOMContentLoaded", function () {
  const tabsContainer = document.querySelector(".robotics-profile-tabs .sigma-tabs");

  if (!tabsContainer) return;

  const tabs = Array.from(tabsContainer.querySelectorAll(".sigma-tab-item"));
  const tabContents = Array.from(tabsContainer.querySelectorAll(".sigma-tab-content"));

  if (tabs.length < 2 || tabContents.length !== tabs.length) return;

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
    const targetContent = tabsContainer.querySelector(targetSelector);

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
