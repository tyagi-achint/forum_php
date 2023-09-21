<?php
if (isset($_GET['signUp']) && $_GET['signUp'] === 'false') {
    echo "
    <div id='LoginSignupAlert' class='AlertLoginSignup'>
    <span id='LoginSignupclose' class='Alertclosebutton'>&times;</span>
    <p><b>Failed!  </b>Details does not match or already exist. Please try again. </p>
</div>
<script>
        let LoginSignupAlert = document.getElementById('LoginSignupAlert');
        let LoginSignupclose = document.getElementById('LoginSignupclose');
        LoginSignupclose.onclick = function() {
            LoginSignupAlert.style.display = 'none';
        }
            document.addEventListener('DOMContentLoaded', function() {
                var signupmodal = document.getElementById('signupModal');
                signupmodal.style.display = 'block';
            });
          </script>";
}

if (isset($_GET['signUp']) && $_GET['signUp'] === 'true') {
    echo "
    <div id='LoginSignupSuccess' class='AlertLoginSignup' style='background-color: #C3EDC0 !important;'>
    <span id='LoginSignupSuccessclose' class='Alertclosebutton'>&times;</span>
    <p><b>Success!  </b>Details are saved. You can Login now! </p>
</div>
<script>
        let LoginSignupSuccess = document.getElementById('LoginSignupSuccess');
        let LoginSignupSuccessclose = document.getElementById('LoginSignupSuccessclose');
        LoginSignupSuccessclose.onclick = function() {
            LoginSignupSuccess.style.display = 'none';
        }
          </script>";
}

?>