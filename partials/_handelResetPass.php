<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
include '_server.php';
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$confirmPassword = $_POST['confirmPassword'];
$lastPage = $_POST['lastPage'];
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

// Checking is user is present or not
    $checkingUser = "SELECT  `sno` FROM `login_form` WHERE `username` = '$username' AND `email` = '$email' AND `dob` = '$dob';";
    $result =mysqli_query( $con,$checkingUser);
    $fetchUser = mysqli_fetch_assoc($result);
    $sno = $fetchUser['sno'];
    if ($password !== $confirmPassword) {
        $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "resetPass=false";
        header("Location: " . $redirectURL);
        exit; 
    }
    elseif ($sno == NULL ) {
        $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "resetPass=false";
        header("Location: " . $redirectURL);
        exit; 
    }
    else{
        try{
            $changePasssword = "UPDATE `login_form` SET `password` = '$hashPassword' WHERE `sno` = '$sno';";
            $ChngPass_Result = mysqli_query($con, $changePasssword);
          if ($ChngPass_Result) {
              $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "resetPass=true";
              header("Location: " . $redirectURL);
              exit; 
          }
        }catch (mysqli_sql_exception) {
            $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "resetPass=false";
            header("Location: " . $redirectURL);
            exit; 
        }
    }
    
    
}

?>