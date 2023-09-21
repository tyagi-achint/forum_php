<?php
if (isset($_GET['login']) && $_GET['login'] === 'false') {
    echo "
    <div id='LoginAlert' class='AlertLoginSignup'>
    <span id='Loginclose' class='Alertclosebutton'>&times;</span>
    <p><b>Failed!  </b>Details does not match or not exist. Please try again. </p>
</div>
<script>
        let LoginAlert = document.getElementById('LoginAlert');
        let Loginclose = document.getElementById('Loginclose');
        Loginclose.onclick = function() {
            LoginAlert.style.display = 'none';
        }
            document.addEventListener('DOMContentLoaded', function() {
                var signupmodal = document.getElementById('loginModal');
                signupmodal.style.display = 'block';
            });
          </script>";
}



?>