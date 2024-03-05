<?php
if (isset($_GET['login']) && $_GET['login'] === 'false') {
    ?>
<div id='LoginAlert' class='AlertLoginSignup'>
    <div
        style="width:50%;height: 10vh;margin:auto;position: relative;background: #D83F31;border-radius: 10px; display: flex;align-items: center;justify-content: center;">
        <span id='Loginclose' class='Alertclosebutton'>&times;</span>
        <p><b>Failed! </b>Details do not match or do not exist. Please try again.</p>
    </div>
</div>
<script>
setTimeout(function() {
    window.location.href = '/Xampp_files/Php/forum_php/index.php';
}, 3000);
document.addEventListener('DOMContentLoaded', function() {
    let LoginAlert = document.getElementById('LoginAlert');
    let Loginclose = document.getElementById('Loginclose');
    Loginclose.onclick = function() {
        window.location.href = '/Xampp_files/Php/forum_php/index.php';
    };
});
</script>
<?php
}
?>