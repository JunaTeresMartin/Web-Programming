<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=(int)readline("Input a number");
    $x=0;
    $num=$n;
    while(floor($n)){
        $mod=$n%10;
        $x=$x*10+$mod;
        $n=$n/10;
    }
    if($num==$x){
        echo 
    }
    ?>
</body>
</html>