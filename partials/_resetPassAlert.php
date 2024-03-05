<?php
if (isset($_GET['resetPass']) && $_GET['resetPass'] === 'false') { ?>

<div id='resetPassAlert' class='AlertLoginSignup'>
    <div
        style="width:50%;height: 10vh;margin:auto;position: relative;background: #D83F31;border-radius: 10px; display: flex;align-items: center;justify-content: center;">
        <span id='resetPassclose' class='Alertclosebutton'>&times;</span>
        <p><b>Failed! </b>Details does not match or not exists. Please try again. </p>
    </div>
</div>
<script>
setTimeout(function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}, 3000);
let resetPassAlert = document.getElementById('resetPassAlert');
let resetPassclose = document.getElementById('resetPassclose');
resetPassclose.onclick = function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}
</script>";
<?php
}
elseif (isset($_GET['resetPass']) && $_GET['resetPass'] === 'true') { ?>

<div id='resetPassSuccess' class='AlertLoginSignup'>
    <div
        style="width:50%;height: 10vh;margin:auto;position: relative;background: #C3EDC0 ;border-radius: 10px; display: flex;align-items: center;justify-content: center;">
        <span id='resetPassSuccessclose' class='Alertclosebutton'>&times;</span>
        <p><b>Success! </b>Details are saved. You can Login now! </p>
    </div>
</div>
<script>
setTimeout(function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}, 3000);
let resetPassSuccess = document.getElementById('resetPassSuccess');
let resetPassSuccessclose = document.getElementById('resetPassSuccessclose');
resetPassSuccessclose.onclick = function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}
</script>";
<?php
}

?>