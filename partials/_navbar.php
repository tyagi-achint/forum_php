<nav>
    <div class="logo">
        <img src="images/logo.png" alt="CrowdCanvass">
    </div>
    <div class="navigation1">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="category.php">Categories</a></li>
        </ul>
    </div>
    <div class="navigation2">
        <ul>

            <li><button id="login">Login</button></li>
            <li><button id="signup">Register</button></li>
        </ul>
    </div>
</nav>

<!-- Modal -->
<?php include 'partials/_loginModal.php'; ?>
<?php include 'partials/_signupModal.php'; ?>
<?php include 'partials/_resetPassword.php'; ?>

<!-- Script -->
<script>
// Modal

var loginmodal = document.getElementById("loginModal");
var signupmodal = document.getElementById("signupModal");
var resetmodal = document.getElementById("resetModal");

var login = document.getElementById("login");
var signup = document.getElementById("signup");

var spanlogin = document.getElementById("close0");
var spansignup = document.getElementById("close1");
var spanreset = document.getElementById("close2");




login.onclick = function() {
    loginmodal.style.display = "block";
}

signup.onclick = function() {
    signupmodal.style.display = "block";
}

spanlogin.onclick = function() {
    loginmodal.style.display = "none";
}
spansignup.onclick = function() {
    signupmodal.style.display = "none";
}
spanreset.onclick = function() {
    resetmodal.style.display = "none";
}

var openSignupLink = document.getElementById('openSignupModal');
var openLoginLink = document.getElementById('openLoginModal');
var openResetLink = document.getElementById('openResetModal');
var openSignupLinkFromReset = document.getElementById('openSignupModalFromReset');
var openLoginLinkFromReset = document.getElementById('openLoginModalFromReset');


openSignupLink.addEventListener('click', function(e) {
    e.preventDefault();
    loginmodal.style.display = 'none';
    signupmodal.style.display = 'block';
});
openLoginLink.addEventListener('click', function(e) {
    e.preventDefault();
    signupmodal.style.display = 'none';
    loginmodal.style.display = 'block';
});
openResetLink.addEventListener('click', function(e) {
    e.preventDefault();
    loginmodal.style.display = 'none';
    resetmodal.style.display = 'block';
});
openSignupLinkFromReset.addEventListener('click', function(e) {
    e.preventDefault();
    resetmodal.style.display = 'none';
    signupmodal.style.display = 'block';
});
openLoginLinkFromReset.addEventListener('click', function(e) {
    e.preventDefault();
    resetmodal.style.display = 'none';
    loginmodal.style.display = 'block';
});
</script>