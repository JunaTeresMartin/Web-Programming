<?php
    if(session_start()){
        echo "session staretd";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION['username']="admin";
        $_SESSION['pwd']="123";
        echo "<br/>session variables are set";
        echo "<br/>username: ".$_SESSION['username']."<br/>Password: ".$_SESSION['pwd'];
        //modified
        $_SESSION['username']="admin_1345";
        echo "<br/>--MODIFIED--<br/>username: ".$_SESSION['username']."<br/>Password: ".$_SESSION['pwd'];
        session_unset();
        echo "<br/>--AFTER SESSION_UNSET()--<br/>username: ".$_SESSION['username']."<br/>Password: ".$_SESSION['pwd'];
        session_destroy();
        echo("session is been destroyed")
    ?>
</body>
</html>