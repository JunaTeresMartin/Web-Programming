<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn){
    $sql="SELECT * from student";
    $result=mysqli_query($conn,$sql);
    if($result){  
        echo "<table border='2'>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['std_id']."</td><td>".$row['std_name']."</td></tr>";
        }    
        echo "</table>";
    }
    else{
        echo "Not connected";
    }
}
?>