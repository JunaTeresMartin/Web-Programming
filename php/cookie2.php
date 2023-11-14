<?php
    if(isset($_POST['button'])){
        define("FIVE_DAYS",60*60*24*5);
        setcookie("name",$_POST["name"],time()+FIVE_DAYS);
        setcookie("height",$_POST["height"],time()+FIVE_DAYS);
        setcookie("color",$_POST["color"],time()+FIVE_DAYS);
        $n=$_COOKIE["name"];
        $h=$_COOKIE["height"];
        $c=$_COOKIE["color"];
        echo "Cookies are set successfully";
        echo "<p>$n is the name<br>$h is the height<br>$c is the favourite color</p>";
    }
    else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
        <table>
            <tr><td>Name: <input type="text" name="name"></td></tr>
            <tr><td>Height: <input type="number" name="height"></td></tr>
            <tr><td>Favourite Color: <input type="text" name="color"></td></tr>
            <tr>
                <td><input type="submit" value="Write cookie" name="button"></td>
            </tr>
        </table>
    </form>
</body>
</html>

}