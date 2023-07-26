<!DOCTYPE html>
<html>
<head>
    <title>Login Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picocss/dist/pico.min.css">
</head>
<body>
    <div class="container">
        <h2>Kullanici Girisi</h2>
        <form action="login.php" method="post">
            <label for="username">Kullanici Adi:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Parola:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Giris">
        </form>
        <hr>
        <h2>Kayit Olma</h2>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <label for="username">Kullanici Adi:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Parola:</label>
            <input type="password" id="password" name="password" required>
            <label for="avatar">Fotograf:</label>
            <input type="file" id="avatar" name="avatar" accept="image/*" required>
            <input type="submit" value="Kayit Ol">
        </form>
    </div>
</body>
</html>
