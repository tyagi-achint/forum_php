<?php
if (isset($_GET['signUp']) && $_GET['signUp'] === 'false') {
 ?>
<div id='SignupAlert' class='AlertLoginSignup'>
    <div
        style="width:50%;height: 10vh;margin:auto;position: relative;background: #D83F31;border-radius: 10px; display: flex;align-items: center;justify-content: center;">
        <span id='Signupclose' class='Alertclosebutton'>&times;</span>
        <p><b>Failed! </b>Details does not match or already exist. Please try again. </p>
    </div>
</div>
<script>
setTimeout(function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}, 5000);
let SignupAlert = document.getElementById('SignupAlert');
let Signupclose = document.getElementById('Signupclose');
Signupclose.onclick = function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}
</script>";
<?php
}

elseif (isset($_GET['signUp']) && $_GET['signUp'] === 'true') {
?>
<div id='SignupSuccess' class='AlertLoginSignup'>
    <div
        style="width:50%;height: 10vh;margin:auto;position: relative;background: #C3EDC0 ;border-radius: 10px; display: flex;align-items: center;justify-content: center;">
        <span id='SignupSuccessclose' class='Alertclosebutton'>&times;</span>
        <p><b>Success! </b>Details are saved. You can Login now! </p>
    </div>
</div>
<script>
setTimeout(function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}, 3000);
let SignupSuccess = document.getElementById('SignupSuccess');
let SignupSuccessclose = document.getElementById('SignupSuccessclose');
SignupSuccessclose.onclick = function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}
</script>";
<?php
}

?>