let slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    slides.forEach((slide) => (slide.style.display = 'none'));
    dots.forEach((dot) => dot.classList.remove('active'));
    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].classList.add('active');
}
function autoSlides() {
    showSlides((slideIndex += 1));
    setTimeout(autoSlides, 5000);
}
autoSlides();
function plusSlides(n) {
    showSlides((slideIndex += n));
}
function currentSlide(n) {
    showSlides((slideIndex = n));
}



// Modal
var loginmodal = document.getElementById("loginModal");
var signupmodal = document.getElementById("signupModal");

var login = document.getElementById("login");
var signup = document.getElementById("signup");

var spanlogin = document.getElementsByClassName("close")[0];
var spansignup = document.getElementsByClassName("close")[1];


login.onclick = function () {
    loginmodal.style.display = "block";
}

signup.onclick = function () {
    signupmodal.style.display = "block";
}

spanlogin.onclick = function () {
    loginmodal.style.display = "none";
}
spansignup.onclick = function () {
    signupmodal.style.display = "none";
}