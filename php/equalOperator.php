<?php
    $height=10;
    $width=6;
    if($width==0){
        echo "The width needs to be a non-zero number";
    }
    else{
        echo $height*$width;
        echo "<br> The area of the rectangle is $height*$width";
        echo "<br> The area of the rectangle is ".$height*$width;
        echo "<br> The area of the rectangle is ".$height*$width." cm square";
    }
?>