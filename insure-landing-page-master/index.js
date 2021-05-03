document.querySelector('.ham').onclick = function () {
  hamToggle();
};

var x = document.querySelector('.navigation');
function hamToggle() {
  x.classList.toggle('responsive');
  document.querySelector('.ham').classList.toggle('showClose');
}

var menuLinks = document.querySelectorAll('.item');
menuLinks.forEach(function (menuLink) {
  menuLink.addEventListener('click', hamToggle);
});
