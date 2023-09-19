<?php
include '_server.php';

if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

    $log = "SELECT `password` FROM `login_form` WHERE `username` = '$username';";
    $fetchPassword = mysqli_fetch_assoc(mysqli_query( $con,$log));
    if ( $fetchPassword['password']== $password){
        echo"<script>alert('Success!');</script>";
      
        }
        else{
            echo"<script>alert('Details does not match. Please try again.');
            document.addEventListener('DOMContentLoaded', function () {
                var loginmodal = document.getElementById('loginModal');
                loginmodal.style.display = 'block';
            });</script>";
        }
}
?>
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span id='close0' class="close">&times;</span>
        <div class="loginSignup">
            <h2>User Login Form</h2>
            <div class='container'>
                <form method='post'>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <div style='text-align: center;'>
                        <button type='submit'>Login</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>
            <div class='bottomContainer'>
                <p>forgot password? <a id='openResetModal'>reset it.</a> </p>
                <p>New user? <a id='openSignupModal'>signup</a></p>
            </div>
        </div>
    </div>
</div>