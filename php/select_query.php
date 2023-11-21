<?php
    $conn=mysqli_connect("localhost","root","","test");
    if ($conn){
        echo "Connected";
        $sql= "select * from student_details";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<br>have data in table<br>";
            echo "<table border='1' width='200'><tr><td>id</td><td>name</td><td>age</td><tr>";
            while($row=mysqli_fetch_assoc($result)){
                // echo $row["id"]." ". $row["name"]." ".$row["age"]."<br>";
                
                echo "<tr><td>". $row["id"]."</td><td> ". $row["name"]."</td><td> ".$row["age"]."</td><tr>";

            }

        }
        else{
            echo "<br>no data in table<br>";
        }

    }
    else{
        echo "Connection failed: ".mysqli_connect_error();
    }
    $conn->close();
?>
