<?php
include 'config.php';

$message = '';

if (isset($_POST['delete'])) {
    $stdid = $_POST['stdid'];

    // Delete the student record
    $sql = "DELETE FROM student WHERE std_id='$stdid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $message = "Student with ID $stdid has been deleted successfully.";
    } else {
        $message = "Error deleting student: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Student - www.juna.com</title>
    <link href="my_style.css" rel="stylesheet"/>
</head>
<body>

<?php
    include 'myheader.html';
?>

<div class="content">
    <h2>Delete a Student</h2>
    <form method="post" action="mydelete.php">
        <input type="text" name="stdid" placeholder="Enter Student ID to delete" required/>
        <input type="submit" name="delete" value="Delete"/>
    </form>
    
    <?php echo $message; ?>
</div>

</body>
</html>
