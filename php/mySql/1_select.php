<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn){
    $sql="SELECT * from student";
    $result=mysqli_query($conn,$sql);
    if($result){  
        while($row=mysqli_fetch_assoc($result)){
            echo $row['std_id']."   ".  $row['std_name']."<br/>";
        }    
    }
    else{
        echo "Not connected";
    }
}
?>


<!-- 
Output:

1 Sam
3 Liya
4 Mary
5 Clara
6 Daniel
8 Akku 
-->