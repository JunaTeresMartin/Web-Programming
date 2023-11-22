<?php
include 'config.php';
if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

    $stdid = $_POST['stdid'];
    $stdname = $_POST['stdname'];
    $branch = $_POST['branch'];
    $age = $_POST['age'];

    $sql = "INSERT INTO student (std_id, std_name, branch, age) VALUES ('$stdid', '$stdname', '$branch',  '$age')";
//echo $sql;
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Data Inserted successfully!");</script>';
    } else {
        die("Error: " . mysqli_error($conn));
    }

    mysqli_close($conn);
}
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
        <h2>Add student to www.juna.com</h2>
            <form method="post" action="add_student.php">
         Student Id: <input type="text" name="stdid" required/><br>
        Name: <input type="text" name="stdname" required/><br>
        Branch: <input type="text" name="branch" required/><br>
        Age: <input type="number" name="age" required/><br>
        <input type="submit" name="submit" value="Add"/>
    </form>
    <h1>
  </h1>
    </div>

    
    
</body>
</html>