
// document.addEventListener('DOMContentLoaded', function () {
//   const isMobileView = () => window.innerWidth < 992;

//   const submenuTriggers = document.querySelectorAll('.dropdown-submenu > a');

//   submenuTriggers.forEach(trigger => {
//     trigger.addEventListener('click', function (e) {
//       if (isMobileView()) {
//         e.preventDefault();
//         e.stopPropagation();

//         const submenu = this.nextElementSibling;


//         document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(menu => {
//           if (menu !== submenu) {
//             menu.classList.remove('show');
//           }
//         });

//         submenu.classList.toggle('show');
//       }
//     });
//   });

//   // Reset submenus when main dropdown closes
//   document.querySelectorAll('.dropdown').forEach(drop => {
//     drop.addEventListener('hidden.bs.dropdown-1', function () {
//       this.querySelectorAll('.dropdown-menu').forEach(sub => {
//         sub.classList.remove('show');
//       });
//     });
//   });
// }); 

// menu icon change //
function changeIcon() {
  const open = document.getElementById('open-icon');
  const close = document.getElementById('close-icon');

  if (open.style.display === 'none') {
    open.style.display = 'block';
    close.style.display = 'none';
  } else {
    open.style.display = 'none';
    close.style.display = 'block';
  }
}

// navbar animation  //

const navbar = document.getElementById('navbar');
const footer = document.getElementById('footer');

window.addEventListener('scroll', () => {

  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }


  const footerTop = footer.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (footerTop < windowHeight) {
    navbar.classList.add('hide');
  } else {
    navbar.classList.remove('hide');
  }
});

// page active   // 
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");


  const currentPage = window.location.pathname.split("/").pop() || "index.php";

  navLinks.forEach(link => {

    const linkHref = link.getAttribute("href").split("?")[0];


    if (linkHref === currentPage) {
      link.classList.add("active-nav");
    }
  });
});

// service //


var listItems = document.querySelectorAll('.list-group-item');
const collapseElements = document.querySelectorAll('.collapse');

listItems.forEach(item => {
  item.addEventListener('click', () => {

    listItems.forEach(i => i.classList.remove('active'));

    item.classList.add('active');
  });
});


collapseElements.forEach(collapse => {
  collapse.addEventListener('show.bs.collapse', (e) => {
    const targetId = `#${collapse.id}`;
    listItems.forEach(item => {
      if (item.getAttribute('href') === targetId) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });
  });
});

var listItems = document.querySelectorAll('.list-group-item');

listItems.forEach(item => {
  item.addEventListener('click', function () {
    listItems.forEach(i => i.classList.remove('active'));
    this.classList.add('active');
  });
});
// scroll to top //

// Get the button
const scrollToTopBtn = document.getElementById("scrollToTopBtn");


window.onscroll = function () {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
};


scrollToTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
