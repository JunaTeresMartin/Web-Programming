<?php
    $colors = array("blue","red","black");
    for ($i=0;$i<count($colors);$i++){
        if(strcmp($colors[$i],"black")<0){
            print($colors[$i]." is less than black");
            print("<br>");
        }
        elseif(strcmp($colors[$i],"black")>0){
            print($colors[$i]." is greater than black");
            print("<br>");
        }
        else{
            print($colors[$i]." is equal to black");
            print("<br>");
        }
    }
?>