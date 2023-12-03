

<html>
    <body>
    <form action="" method="POST">
        <input type="text" name="name"> Name
        <input type="number" name="age"> Age
        <input type="text" name="branch"> Branch
        <input type="submit" value="Write cookies" name='submit'>
    </form>
    <?php
if(isset($_POST['submit'])){
    setcookie("name",$_POST['name'],time()+(1000000),"/");
    setcookie("age",$_POST['age'],time()+(1000000),"/");
    setcookie("branch",$_POST['branch'],time()+(1000000),"/");
    $my_name=$_POST['name'];
    $my_age=$_POST['age'];
    $my_branch=$_POST['branch'];
    echo "cookie are successfully created";
}
?>
    </body>
</html>