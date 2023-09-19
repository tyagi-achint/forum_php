<?php
include '_server.php';
$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}
if (isset($_POST['username'])){
$confirmPassword = $_POST['confirmPassword'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$email = $_POST['email'];

if (confirmPassword($password, $confirmPassword)){
   


    $checkingUser = "SELECT  `sno` FROM `php_project`.`login_form` WHERE `username` = '$username' AND `email` = '$email' AND `dob` = '$dob';";
    $result =mysqli_query( $con,$checkingUser);
    $fetchUser = mysqli_fetch_assoc($result);
    $sno = $fetchUser['sno'];

    if($sno !== NULL){
        $changePasssword = "UPDATE `php_project`.`login_form` SET `password` = '$password' WHERE `sno` = '$sno';";

        if ($con->query($changePasssword)== true){
        $messageSuccess = true;
            }}
        else  {
                $messageError = true;
            }

        
        
    }
    else{
        forgotPass();
    }
}
$con->close();


?>
<div id="resetModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="loginSignup">
            <h2>Change Password Form</h2>
            <div class='container'>
                <form action='changePass.php' method='post'>
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
                <p>New user? <a href=''>signup.</a></p>
                <p>old user? <a href=''>login.</a></p>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_signupModal.php'; ?>
<?php include 'partials/_loginModal.php'; ?>