<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["size"] > 0) {
        $avatar = $_FILES["avatar"]["name"];
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "avatars/" . $avatar);
    }

    header("Location: profile.php");
    exit();
}
?>
