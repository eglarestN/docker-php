<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picocss/dist/pico.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="update_profile.php" method="post" enctype="multipart/form-data">
            <!-- Display current user information here with appropriate form fields for editing -->
            <label for="avatar">New Avatar:</label>
            <input type="file" id="avatar" name="avatar" accept="image/*">
            <input type="submit" value="Update Profile">
        </form>
    </div>
</body>
</html>
