<?php
include '_server.php';
$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}

if (isset($_POST['username'])){
$name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
$confirmPassword = $_POST['confirmPassword'];


if (confirmPassword($password, $confirmPassword)){
    
    $sql = "INSERT INTO `php_project`.`login_form` ( `name`, `username`, `email`, `password`, `dob`, `time`) VALUES ('$name', '$username', '$email', '$password', '$dob', CURRENT_TIMESTAMP);";
    if ($con->query($sql)== true){
        $messageSuccess = true;

        }
        else{
            $messageError = true;

        }
    }
    else{
        newUser();
    }
}
$con->close();



?>


<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="loginSignup">
            <h2>User Registration Form</h2>
            <div class='container'>
                <form action='register.php' method='post'>
                    <input type='text' name='name' placeholder='Name' required>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='email' name='email' placeholder='Email' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <input type='password' name='confirmPassword' placeholder='Confirm Password' required>

                    <input type='text' name='dob' pattern='\d{4}-\d{2}-\d{2}' placeholder='Date of Birth (yyyy-mm-dd)'
                        required>
                    <div style='text-align: center;'>
                        <button type='submit'>Submit</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>
            <div class='bottomContainer'>
                <p>old user? <a href=''>login.</a></p>

            </div>
        </div>
    </div>
</div>

<?php include 'partials/_loginModal.php'; ?>