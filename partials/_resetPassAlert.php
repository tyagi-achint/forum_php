<?php
if (isset($_GET['resetPass']) && $_GET['resetPass'] === 'false') {
    echo "
    <div id='resetPassAlert' class='AlertLoginSignup'>
    <span id='resetPassclose' class='Alertclosebutton'>&times;</span>
    <p><b>Failed!  </b>Details does not match or not exists. Please try again. </p>
</div>
<script>
        let resetPassAlert = document.getElementById('resetPassAlert');
        let resetPassclose = document.getElementById('resetPassclose');
        resetPassclose.onclick = function() {
            resetPassAlert.style.display = 'none';
        }
            document.addEventListener('DOMContentLoaded', function() {
                var signupmodal = document.getElementById('resetModal');
                signupmodal.style.display = 'block';
            });
          </script>";
}

if (isset($_GET['resetPass']) && $_GET['resetPass'] === 'true') {
    echo "
    <div id='resetPassSuccess' class='AlertLoginSignup' style='background-color: #C3EDC0 !important;'>
    <span id='resetPassSuccessclose' class='Alertclosebutton'>&times;</span>
    <p><b>Success!  </b>Details are saved. You can Login now! </p>
</div>
<script>
        let resetPassSuccess = document.getElementById('resetPassSuccess');
        let resetPassSuccessclose = document.getElementById('resetPassSuccessclose');
        resetPassSuccessclose.onclick = function() {
            resetPassSuccess.style.display = 'none';
        }
          </script>";
}

?>