<?php
//while loop
$x=10; //initial

while ($x<=20){
    echo "Nambari ni:$x<br>";
    $x+=2;
}
echo "<br>";

//do...while
$y=8;
do{
    echo "The number is:$y<br>";
    $y++;
}while($y<=12);
echo "<br>";
//for loop:init counter, test counter,increment/decrement counter
for ($num=30;$num<=60;$num+=6){
    echo "The number is:$num<br>";
}
echo "<br>";
//for each loop
$netscapeclass=array("Dennis","Bruce","Sharon","Emmanuel",23,90.4,true,false);
var_dump($netscapeclass);
echo "<br>";
foreach($netscapeclass as $darasa){
    echo "$darasa <br>";

}

