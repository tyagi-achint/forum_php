<?php
include '_server.php';

function confirmPasswordSignup($password, $confirmPassword) {
if ($password !== $confirmPassword) {
echo "<script>
alert('Passwords do not match. Please try again.');
</script>";
return false;
}
return true;
}
if (isset($_POST['email'])){
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$confirmPassword = $_POST['confirmPassword'];


if (confirmPasswordSignup($password, $confirmPassword)){
try{
$sql = "INSERT INTO `login_form` ( `name`, `username`, `email`, `password`, `dob`, `time`) VALUES
('$name', '$username', '$email', '$password', '$dob', CURRENT_TIMESTAMP);";
if ($con->query($sql)== true){
echo"<script>
alert('Success!');
</script>";

}
else{
echo"<script>
alert('Details does not match or already exist. Please try again.');
document.addEventListener('DOMContentLoaded', function() {
    var signupmodal = document.getElementById('signupModal');
    signupmodal.style.display = 'block';
});
</script>";
}
}
catch(mysqli_sql_exception) {
echo"<script>
alert('Details does not match or already exist. Please try again.');
document.addEventListener('DOMContentLoaded', function() {
    var signupmodal = document.getElementById('signupModal');
    signupmodal.style.display = 'block';
});
</script>";

}


}
else{
echo"<script>
document.addEventListener('DOMContentLoaded', function() {
    var signupmodal = document.getElementById('signupModal');
    signupmodal.style.display = 'block';
});
</script>";
}
}



?>


<div id="signupModal" class="modal">
    <div class="modal-content">
        <span id='close1' class="close">&times;</span>
        <div class="loginSignup">
            <h2>User Registration Form</h2>
            <div class='container'>
                <form method='post'>
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
                <p>old user? <a id='openLoginModal'>login.</a></p>

            </div>
        </div>
    </div>
</div>