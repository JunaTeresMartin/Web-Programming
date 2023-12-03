<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Simple Calulator</h2>
    <form method="POST">
        <p>Enter first number: <input type="number" name="f"></p>
        <p>Enter second number: <input type="number" name="s"></p>
        <p><input type="submit" value="Sum" name="op">&nbsp;&nbsp;<input type="submit" value="Difference" name="op">&nbsp;
        <input type="submit" value="Multiply" name="op">&nbsp;&nbsp;<input type="submit" value="Divide" name="op"></p>
    </form>
    <?php
if (isset($_POST['op']) && (isset($_POST['f']) != "" && isset($_POST['s']) != "")) {
    $first_num = $_POST['f'];
    $second_num = $_POST['s'];
    $op = $_POST['op'];
    switch ($op) {
        case 'Sum':
            echo "The sum is : " . $first_num + $second_num;
            break;
        case 'Difference':
            echo "The difference is : " . $first_num - $second_num;
            break;
        case 'Multiply':
            echo "The multoplicated value is : " . $first_num * $second_num;
            break;
        case 'Divide':
            echo "The divided value is : " . $first_num / $second_num;
            break;
    }
} else {
    echo "Invalid";
}
?>
</body>
</html>