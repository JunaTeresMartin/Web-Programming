<?php
    $cookie_name="user";
    $cookie_value="123";
    setcookie($cookie_name,$cookie_value,time()+(86400*30));
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
    if(!isset($_COOKIE[$cookie_name])){
        echo "The cookie named ".$cookie_name." is not set";
    }
    else{
        echo "The cookie $cookie_name is set<br>";
        echo "Value is $_COOKIE[$cookie_name]";
    }
    ?>
</body>
</html>