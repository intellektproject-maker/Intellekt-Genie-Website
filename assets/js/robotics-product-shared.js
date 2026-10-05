/**
 * Intellekt Genie - Robotics Product Shared Utilities
 * Handles mobile navbar toggling, scroll-to-top, and smooth anchor jumps
 */

(function () {
  'use strict';

  // Ensure changeIcon function is available globally for header onclick attribute
  window.changeIcon = function () {
    const openIcon = document.getElementById('open-icon');
    const closeIcon = document.getElementById('close-icon');

    if (!openIcon || !closeIcon) return;

    if (openIcon.style.display === 'none') {
      openIcon.style.display = 'inline-block';
      closeIcon.style.display = 'none';
    } else {
      openIcon.style.display = 'none';
      closeIcon.style.display = 'inline-block';
    }
  };

  // Mobile Navbar Toggle Handler
  function initMobileNav() {
    const toggler = document.querySelector('.robotics-toggler');
    const navCollapse = document.getElementById('navbarNavDropdown');

    if (toggler && navCollapse) {
      toggler.addEventListener('click', function () {
        navCollapse.classList.toggle('show');
        const isExpanded = navCollapse.classList.contains('show');
        toggler.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      });

      // Close menu when clicking outside
      document.addEventListener('click', function (e) {
        if (!toggler.contains(e.target) && !navCollapse.contains(e.target)) {
          if (navCollapse.classList.contains('show')) {
            navCollapse.classList.remove('show');
            toggler.setAttribute('aria-expanded', 'false');
            const openIcon = document.getElementById('open-icon');
            const closeIcon = document.getElementById('close-icon');
            if (openIcon && closeIcon) {
              openIcon.style.display = 'inline-block';
              closeIcon.style.display = 'none';
            }
          }
        }
      });
    }
  }

  // Scroll to Top Button Handler
  function initScrollToTop() {
    const scrollBtn = document.getElementById('scrollToTopBtn');
    if (!scrollBtn) return;

    window.addEventListener('scroll', function () {
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      if (scrollY > 280) {
        scrollBtn.style.display = 'flex';
        scrollBtn.style.opacity = '1';
      } else {
        scrollBtn.style.opacity = '0';
        scrollBtn.style.display = 'none';
      }
    }, { passive: true });

    scrollBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Smooth in-page anchor scrolling with navbar offset
  function initSmoothAnchors() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (!targetId || targetId === '#') return;
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          const navOffset = 84;
          const elementPosition = targetEl.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - navOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // Initialize on DOM load
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initMobileNav();
      initScrollToTop();
      initSmoothAnchors();
    });
  } else {
    initMobileNav();
    initScrollToTop();
    initSmoothAnchors();
  }
})();
