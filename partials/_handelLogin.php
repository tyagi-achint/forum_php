<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
include '_server.php';
$username = $_POST['username'];
$password = $_POST['password'];
$lastPage = $_POST['lastPage'];


$login_sql = "SELECT * FROM `login_form` WHERE `username` = '$username';";
$login_Result = mysqli_query($con, $login_sql);
$login_rows = mysqli_num_rows($login_Result);

if($login_rows == 1){
$row = mysqli_fetch_assoc($login_Result);
try{
    if(password_verify($password, $row['password'])){
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
    }else{
        $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "login=false";
    header("Location: " . $redirectURL);
    exit; 
    }
    header("Location:/files/Php/forum_php/index.php ");
}
catch (mysqli_sql_exception) {
    $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "login=false";
    header("Location: " . $redirectURL);
    exit; 
}
}
else{
    $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "login=false";
              header("Location: " . $redirectURL);
              exit; 
}
}

?>