<?php
include '_server.php';

function confirmPassword($password, $confirmPassword) {
    if ($password !== $confirmPassword) {
       echo "<script>alert('Passwords do not match. Please try again.');</script>";
        return false;

    }
    return true;
}
if (isset($_GET['email'])){
$confirmPassword = $_GET['confirmPassword'];
$username = $_GET['username'];
$password = $_GET['password'];
$dob = $_GET['dob'];
$email = $_GET['email'];


if (confirmPassword($password, $confirmPassword)){
   


    $checkingUser = "SELECT  `sno` FROM `login_form` WHERE `username` = '$username' AND `email` = '$email' AND `dob` = '$dob';";
    $result =mysqli_query( $con,$checkingUser);
    $fetchUser = mysqli_fetch_assoc($result);
    $sno = $fetchUser['sno'];

    if($sno !== NULL){
        $changePasssword = "UPDATE `login_form` SET `password` = '$password' WHERE `sno` = '$sno';";

        if ($con->query($changePasssword)== true){
            echo"<script>alert('Success!');</script>";
            }}
        else  {
            echo"<script>alert('Details does not match. Please try again.');
            document.addEventListener('DOMContentLoaded', function () {
                var resetmodal = document.getElementById('resetModal');
                resetmodal.style.display = 'block';
            });</script>";
            }

        
        
    }
    
else{
    echo"<script>
   
    document.addEventListener('DOMContentLoaded', function () {
        var resetmodal = document.getElementById('resetModal');
        resetmodal.style.display = 'block';
    });
   
    </script>";
}
}

?>

<div id="resetModal" class="modal">
    <div class="modal-content">
        <span id='close2' class="close">&times;</span>
        <div class="loginSignup">
            <h2>Change Password Form</h2>
            <div class='container'>
                <form method='get'>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='email' name='email' placeholder='Email' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <input type='password' name='confirmPassword' placeholder='Confirm Password' required>
                    <input type='text' name='dob' pattern='\d{4}-\d{2}-\d{2}' placeholder='Date of Birth (yyyy-mm-dd)'
                        required>
                    <div style='text-align: center;'>
                        <button type='submit'>Change</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>

            <div class='bottomContainer'>
                <p>New user? <a id='openSignupModalFromReset'>signup.</a></p>
                <p>old user? <a id='openLoginModalFromReset'>login.</a></p>
            </div>
        </div>
    </div>
</div>