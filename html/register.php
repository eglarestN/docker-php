<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $avatar = $_FILES["avatar"]["name"];


    move_uploaded_file($_FILES["avatar"]["tmp_name"], "avatars/" . $avatar);


    header("Location: profile.php");
    exit();
}
?>
