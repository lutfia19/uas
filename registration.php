<?php
include 'db.php';

if (isset($_POST['NPM']) && isset($_POST['password'])) {
    $NPM = $_POST['NPM'];
    $password = $_POST['password'];

    $query = "INSERT INTO data (NPM, password) VALUES ('$NPM', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
    } else {
        header('Location: register.php?error=Registrasi gagal');
    }
} else {
    header('Location: register.php');
}
?>