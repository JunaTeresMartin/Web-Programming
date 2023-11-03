<?php
if(isset($_POST['mybutton']))
{
    $myText=$_POST['myname']; //take the value
    echo "<br/> Hello ".$myText." Welcome to this PHP class!!!";
}
else{
    echo "Please click submit button";
    
}
?>