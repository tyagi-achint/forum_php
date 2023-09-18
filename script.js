


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