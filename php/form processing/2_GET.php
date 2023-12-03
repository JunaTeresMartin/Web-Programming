<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2_GET.php" method="GET">
        <p><label for="">Enter your name: </label><input type="text" name="name"></p>
        <p><label for="">Enter your age: </label><input type="number" name="age"></p>
        <p><input type="submit" value="submit" name='submit'></p>
    </form>

    <?php
        if(isset($_GET['submit'])){
            $name=$_GET['name'];
            $age=$_GET['age'];
            echo $name,$age;
        }
    ?>
</body>
</html>