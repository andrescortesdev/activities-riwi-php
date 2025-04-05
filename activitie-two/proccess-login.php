<?php 
session_start();

require 'data.php';

$username= $_POST['email'];
$password = $_POST['password'];

foreach($users as $user){
    if($user['email'] == $username && $user['password'] == $password){
        $_SESSION['user'] = $user;
        header('Location: home.php');
        exit;
    }
}
$_SESSION['error'] = 'credenciales incorrectas';
exit

?>