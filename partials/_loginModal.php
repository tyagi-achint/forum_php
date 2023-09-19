<?php
include '_server.php';

$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}
if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

    $log = "SELECT `password` FROM `php_project`.`login_form` WHERE `username` = '$username';";
    $fetchPassword = mysqli_fetch_assoc(mysqli_query( $con,$log));
    if ( $fetchPassword['password']== $password){
    $messageSuccess = true;
        }
        else{
            $messageError = true;
        }
}
$con->close();



?>
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="loginSignup">
            <h2>User Login Form</h2>
            <div class='container'>
                <form action='_loginModal.php' method='post'>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <div style='text-align: center;'>
                        <button type='submit'>Login</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>
            <div class='bottomContainer'>
                <p>forgot password? <a href=''>reset it.</a> </p>
                <p>New user? <a id="signup">Register</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<?php include 'partials/_signupModal.php'; ?>