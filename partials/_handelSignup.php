<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '_server.php';
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $confirmPassword = $_POST['confirmPassword'];
  $lastPage = $_POST['lastPage'];
  
  // Checking if the user is already registered
  $emailExists = "SELECT * FROM `login_form` WHERE `email`= '$email'";
  $usernameExists = "SELECT * FROM `login_form` WHERE `username`= '$username'";
  $emailExists_Result = mysqli_query($con, $emailExists);
  $usernameExists_Result = mysqli_query($con, $usernameExists);
  $hashPassword = password_hash($password, PASSWORD_DEFAULT);

  if ($password !== $confirmPassword) {
      $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "signUp=false";
      header("Location: " . $redirectURL);
      exit; 
  } elseif (mysqli_num_rows($emailExists_Result) > 0 || mysqli_num_rows($usernameExists_Result) > 0) {
      $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "signUp=false";
      header("Location: " . $redirectURL);
      exit; 
  } else {
      try {
          $sql = "INSERT INTO `login_form` ( `name`, `username`, `email`, `password`, `dob`, `time`) VALUES
          ('$name', '$username', '$email', '$hashPassword', '$dob', CURRENT_TIMESTAMP);";
          $sql_Result = mysqli_query($con, $sql);
          if ($sql_Result) {
              $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "signUp=true";
              header("Location: " . $redirectURL);
              exit; 
          }
      } catch (mysqli_sql_exception) {
          $redirectURL = $lastPage . (strpos($lastPage, '?') !== false ? '&' : '?') . "signUp=false";
          header("Location: " . $redirectURL);
          exit; 
      }
  }
}
?>