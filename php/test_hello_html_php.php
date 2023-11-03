<?php
if(isset($_POST['mybutton']))
{
    $myText=$_POST['myname']; //take the value
    echo "<br/> Hello ".$myText." Welcome to this PHP class!!!";
}
else{
?> 
<!-- breaking the php to execute else part(to add html part) -->
<html>
    <title>Test Hello</title>
    <body>
        <p>Enter your name in the form and it submit button</p>
        <form action="test_hello_html_php.php" method="post">
            <table>
            <tr><td>Enter Name: <input name="myname" type="text"></td></tr>
            <tr><td><input type="submit" name="mybutton" value="Click Me"></td></tr>
            </table>
        </form>
    </body>
    </html>

<?php
}
?>