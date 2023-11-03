<?php
$myList[0]=1;
$myList[1]=10;
$myList[2]=12;
$myList[3]=21;
$myList[4]="Hello world";
$myList[5]=0.2552;
$myList[6]=56.011;
$myList[]=111;

foreach($myList as $myElement){
    echo $myElement.",&nbsp";
}
echo "<br/>";
echo "My array with 2 added to it is<br/>";
$list=array(5,10,15,20,25);
foreach ($list as $elt){
    echo (($elt+2).",&nbsp");
}
echo "<br/>";
foreach ($list as $elt){
    echo (($elt*2).",&nbsp");
}

echo "<br/><br/>";
echo "This is a string array: <br/>";
$myStringArray=array('Haritha','Angel','Maria','Anu');
foreach ($myStringArray as $myFrnd){
    echo ($myFrnd."&nbsp&nbsp");
}

echo "<br/><br/>";
echo "------Associative Array:------<br/>";
$age['Anu']=22;
$age['Johns']=16;
$age['Joe']=14;
$age['Anna']=3;
echo "Hi I am Anu, I am ".$age['Anu']." years old";
foreach($age as $name=>$age){
    echo "<p>$name is the $age years old</p>";
}

$month=array(
    "January"=> "first",
    "February"=> "second"
);
echo "------Month------<br/>";
foreach($month as $monthName=>$monthValue){
    echo "<p>$monthName is the $monthValue month</p>";  //interporation
}

?>



<!-- 


    Two methods of creating a array:
1. assignment operation
    $myList[3]=21;
    $myList[4]="Hello world";
2.  using array construct
    $list=array(5,10,15,20,25);

-->