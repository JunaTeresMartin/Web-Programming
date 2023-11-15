<?php
    session_start();
    if (isset($_POST['submit'])){
        if(($_POST['user']!="")  || ($_POST['pwd']!="")){
            $input_user=$_POST['user'];
            $input_pwd=$_POST['pwd'];
            if($input_user=='admin' && $input_pwd=='1234'){
                $_SESSION["uname"]=$input_user;
                header("Location:home.html");
                exit();
            }
            else{
                ($errorMessage="Incorrect username or password");
            }
        
        }
        else{
            ($errorMessage="Enter username and password");
        }
    }
    
    ?>
<!DOCTYPE html>
<html >
<body>
    <form action="login1.php" method="post">
        <table>
            <caption>Enter your username and password and hit Login button</caption>
            <tr><th>Username: </th><td><input type="text" name="user"></td></tr>
            <tr><th>Password: </th><td><input type="password" name="pwd"></td></tr>
            <tr><th><input type="submit" value="Login" name="submit"></th></tr>
        </table>
    </form>
</body>
<?php
    if(isset($errorMessage)){
        echo "<p style='color:red;'>$errorMessage</p>";
    }
?>
</html>
