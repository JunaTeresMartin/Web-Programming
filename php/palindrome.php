<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="palindrome.php" method="post">
    <p>Enter a number: <input type="number" name='mynum'></p>
    <input type="submit" value="Check Palindrome" name='myButton'/>
    </form>
    <?php
    if(isset($_POST['myButton']))
    {
        $n = $_POST['mynum']; //take the value
    }
    $x=0;
    $num=$n;
    while(floor($n)){
        $mod=$n%10;
        $x=$x*10+$mod;
        $n=$n/10;
    }
    if($num==$x){
        echo "<br/>$num is a palindrome";
    }
    else{
        echo "<br/>$num is not a palindrome";
    }
    ?>
</body>
</html>
