<?php
if (isset($_GET['signUp']) && $_GET['signUp'] === 'false') {
    echo "
    <div id='SignupAlert' class='AlertLoginSignup'>
    <span id='Signupclose' class='Alertclosebutton'>&times;</span>
    <p><b>Failed!  </b>Details does not match or already exist. Please try again. </p>
</div>
<script>
        let SignupAlert = document.getElementById('SignupAlert');
        let Signupclose = document.getElementById('Signupclose');
        Signupclose.onclick = function() {
            SignupAlert.style.display = 'none';
        }
            document.addEventListener('DOMContentLoaded', function() {
                var signupmodal = document.getElementById('signupModal');
                signupmodal.style.display = 'block';
            });
          </script>";
}

if (isset($_GET['signUp']) && $_GET['signUp'] === 'true') {
    echo "
    <div id='SignupSuccess' class='AlertLoginSignup' style='background-color: #C3EDC0 !important;'>
    <span id='SignupSuccessclose' class='Alertclosebutton'>&times;</span>
    <p><b>Success!  </b>Details are saved. You can Login now! </p>
</div>
<script>
        let SignupSuccess = document.getElementById('SignupSuccess');
        let SignupSuccessclose = document.getElementById('SignupSuccessclose');
        SignupSuccessclose.onclick = function() {
            SignupSuccess.style.display = 'none';
        }
          </script>";
}

?>