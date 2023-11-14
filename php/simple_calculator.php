<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_GET['add']))
    {
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        $add_res=$n1+$n2;
        echo $add_res;
    }
    elseif(isset($_GET['sub']))
    {
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        $sub_res=$n1-$n2;
        echo $sub_res;
    }
    elseif(isset($_GET['mul']))
    {
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        $mul_res=$n1*$n2;
        echo $mul_res;
    }
    elseif(isset($_GET['div']))
    {
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        $div_res=$n1/$n2;
        echo $div_res;
    }
    else{
        echo "Invalid!";
        
    }

    ?>
    <form action="" method="get">
        <table>
            <tr><td><input type="number" name="num1"> First Number</td></tr>
            <tr><td><input type="number" name="num2"> Second Number</td></tr>
            <tr><td><input type="number" name="res"> Result</td></tr>
            <tr>
                <td><input type="submit" value="Add" name="add"><input type="submit" value="Subtract" name="sub">
                <input type="submit" value="Multiply" name="mul"><input type="submit" value="Divide" name="div"></td>
            </tr>
        </table>
    </form>
</body>
</html>
