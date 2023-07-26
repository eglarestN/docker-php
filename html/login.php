<?php
// Kullanıcı adı ve şifreyi burada belirleyin (güvenlik açısından daha iyi yöntemler kullanılmalıdır).
$correct_username = 'emir';
$correct_password = '2525';

// Formdan gönderilen verileri alınır.
if (isset($_POST['username']) && isset($_POST['password'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Kullanıcı adı ve şifre doğrulanır.
    if ($entered_username === $correct_username && $entered_password === $correct_password) {
        // Giriş başarılı, kullanıcıyı hoş geldiniz sayfasına yönlendirin veya istediğiniz işlemleri yapın.
        header("Location: profile.php");
        exit();
    } else {
        // Giriş başarısız, hata mesajı gösterilir.
        echo "Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.";
    }
}
?>
