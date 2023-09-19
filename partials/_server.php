<?php

$server="localhost";
$username="root";
$password="Joker.321@";

$registered  = false;
$login = false;
$changePass =false;
$messageSuccess = false;
$messageError = false;

function forgotPass() {
    global $registered, $login, $changePass;
    $changePass = true;
$login = false;


}

function newUser() {
    global $registered, $login, $changePass;
    $registered = true;  
$login = false;


}

function oldUser() {
    global $registered, $login, $changePass;
    $login = true;
}

function confirmPassword($password, $confirmPassword) {
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
        return false;
    }
    return true;
}




  

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'forgotPass') {
        forgotPass();
    } elseif ($action === 'oldUser') {
        oldUser();
    }
    elseif ($action === 'newUser') {
        newUser();
    }
}

?>