<?php
$correct_username = 'emir';
$correct_password = '2525';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $correct_username && $entered_password === $correct_password) {
        header("Location: profile.php");
        exit();
    } else {
        echo "Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.";
    }
}
?>
