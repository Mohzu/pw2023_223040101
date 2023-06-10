// Toggle class active untuk Hamburger menu
const navbarNav = document.querySelector(".navbar-nav");
// Hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Toggle class active untuk search form
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};

// Klik di luar elemen
const hm = document.querySelector("#hamburger-menu");
const sb = document.querySelector("#search-button");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }

  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});

// live searching
const keyword = document.getElementById("keyword");
const searchButton = document.getElementById("search-button");
const searchContainer = document.getElementById("search-container");

keyword.onkeyup = function () {
  fetch("../ajax/search.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
