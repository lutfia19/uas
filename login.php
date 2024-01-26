<?php
session_start();
include 'db.php';

if (isset($_POST['NPM']) && isset($_POST['password'])) {
    $NPM = $_POST['NPM'];
    $password = $_POST['password'];

    $query = "SELECT * FROM  data 
             WHERE NPM ='$NPM' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['NPM'] = $NPM;
        header('Location: dasbord.html');
    } else {
        header('Location: index.php?error=NPM atau password salah');
    }
} else {
    header('Location: index.php');
}
?>