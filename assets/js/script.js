'use strict';

/**
 * Navbar toggle
 */
const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
  for (let i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
}

navToggleEvent(navElemArr);
navToggleEvent(navLinks);

/**
 * Header sticky & go to top
 */
const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});

// Function to check login status
function checkLogin() {
  const isLoggedIn = false; // This should be replaced with the actual login check logic
  if (isLoggedIn) {
    window.location.href = 'tiket.php';
  } else {
    window.location.href = 'login.php';
  }
}

// Add event listener to all "Book Now" buttons
const bookNowButtons = document.querySelectorAll('#bookNowBtn');
bookNowButtons.addEventListener('DOMContentLoaded', (event) => {
  bookNowButtons.forEach(button => {
    button.addEventListener('click', checkLogin);
  });
});

bookNowButtons.forEach(button){
  button.addEventListener("click", (e) =>{
    e.checkLogin()
  })
}