<?php
include 'config.php';

$search_results = '';

if (isset($_POST['search'])) {
    $search_query = $_POST['search_query'];

    // Search for students by ID or name
    $sql = "SELECT * FROM student WHERE std_id LIKE '%$search_query%' OR std_name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $search_results .= "<h2>Search Results:</h2>";
        $search_results .= "<table border='1'>";
        $search_results .= "<tr><th>Student ID</th><th>Name</th><th>Branch</th><th>Age</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $search_results .= "<tr>";
            $search_results .= "<td>" . $row['std_id'] . "</td>";
            $search_results .= "<td>" . $row['std_name'] . "</td>";
            $search_results .= "<td>" . $row['branch'] . "</td>";
            $search_results .= "<td>" . $row['age'] . "</td>";
            $search_results .= "</tr>";
        }
        $search_results .= "</table>";
    } else {
        $search_results .= "No matching records found.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Student - www.juna.com</title>
    <link href="my_style.css" rel="stylesheet"/>
</head>
<body>

<?php
    include 'myheader.html';
?>

<div class="content">
    <h2>Search for a Student</h2>
    <form method="post" action="search.php">
        <input type="text" name="search_query" placeholder="Enter Student ID or Name" required/>
        <input type="submit" name="search" value="Search"/>
    </form>
    
    <?php echo $search_results; ?>
</div>

</body>
</html>
