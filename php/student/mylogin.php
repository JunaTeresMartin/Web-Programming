<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: my_website.php"); 
    exit();
}

include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from database by username and password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: my_website.php"); 
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - www.juna.com</title>
    <link href="my_style.css" rel="stylesheet"/>
</head>
<body>

<div class="content">
    <h2>Login</h2>
    <form method="post" action="mylogin.php">
        <input type="text" name="username" placeholder="Username" required/><br>
        <input type="password" name="password" placeholder="Password" required/><br>
        <input type="submit" name="login" value="Login"/>
    </form>

    <?php if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    } ?>
</div>

</body>
</html>
