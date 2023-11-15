<?php
    session_start();
    if(isset($_SESSION['uname'])){
        $welcome_message="Welcome, ".$_SESSION['uname']." !";
        echo $welcome_message;
    }
    else{
        echo "<p>Session is not set</p>";
    }
?>
