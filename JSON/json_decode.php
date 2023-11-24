<?php
$json_obj = '{"name" : "Peter" , "age" : 26, "city" : "New York" }';
$obj = json_decode($json_obj);//store JSON data in a php variable
var_dump($obj); // The var_dump() function dumps information about one or more variables
//The information holds type and value of the variables
echo "<br/>Name: ".$obj->name."<br/>Age: ".$obj->age."<br/>City: ".$obj->city;
?>