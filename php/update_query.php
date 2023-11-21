

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update_query.php" method="post">
        <p>Enter the id to update</p>
        <?php
            $conn=mysqli_connect("localhost","root","","test");

            //id part
            if($conn){
                $sql="select * from student_details";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0){
                    echo '<select name="selectId">';
                      while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        echo '<option value="'. $id . '">' . $id .'</option>';
                      }
                        echo  '</select>';    
                }
                else{
                    echo "No data";
                }

                if (isset($_POST['submit'])){
                    $new_name=$_POST['newname'];
                    $id=$_POST['selectId'];
                    $sql2="UPDATE student_details SET name='$new_name' where id='$id'";
                    if(mysqli_query($conn,$sql2)){
                        echo "Record updated successfully";
                    }
                    else{
                        echo "Record updation failed";
                    }
                }
                else{
                    ($errorMessage="Enter name");
                }
            }
            else{
                $conn->close();
            }
        ?>
        <p>Enter the name to update</p>
        <input type="text" name="newname">
        <p><input type="submit" name="submit" value="Submit"></p>
        

    </form>
</body>
</html>
