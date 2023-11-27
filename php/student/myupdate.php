<?php
include 'config.php';


$sql = "SELECT std_id FROM student";
$result = mysqli_query($conn, $sql);

$student_ids = array();
while ($row = mysqli_fetch_assoc($result)) {
    $student_ids[] = $row['std_id'];
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website www.juna.com</title>
    <link href="my_style.css" rel="stylesheet"/>
</head>
<body>

<?php
    include 'myheader.html';
?>

<div class="content">
    <h2>Update student details on www.juna.com</h2>
    <form method="get" action="myupdate.php">
        Select Student ID:
        <select name="id">
            <?php foreach ($student_ids as $id) { ?>
                <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Select"/>
    </form>
    
    <?php
    if (isset($_GET["id"])) {
        $student_id = $_GET["id"];
        $sql = "SELECT * FROM student WHERE std_id='$student_id'";
        $conn = mysqli_connect("localhost", "root", "", "test");
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $stdid = $row['std_id'];
            $stdname = $row['std_name'];
            $branch = $row['branch'];
            $age = $row['age'];
            ?>
            <form method="post" action="myupdate.php">
                Student Id: <input type="text" name="stdid" value="<?php echo $stdid; ?>" readonly/><br>
                Name: <input type="text" name="stdname" value="<?php echo $stdname; ?>" required/><br>
                Branch: <input type="text" name="branch" value="<?php echo $branch; ?>" required/><br>
                Age: <input type="number" name="age" value="<?php echo $age; ?>" required/><br>
                <input type="submit" name="update" value="Update"/>
            </form>
        <?php } else {
            echo "No student found with this ID.";
        }
        mysqli_close($conn);
    }
    ?>
</div>

</body>
</html>
