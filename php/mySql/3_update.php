<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn){
    $sql="UPDATE student SET std_name='Panjavan Paarivendan' WHERE std_id=5";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "updation successful!!";
    }
    else{
        echo "updation error!".mysqli_error($conn);
    }
}
?>