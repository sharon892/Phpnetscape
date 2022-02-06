<?php
//Indexed arrays
$Games=array("Football","Basketball","Volleyball","Hockey");
echo $Games[0];
echo"<br>";
echo $Games[3];
echo"<br>";
echo $Games[2]="Cricket";
echo"<br>";
echo $Games[2];
echo"<br>";
echo count($Games);
echo"<br>";

//Associative arrays
echo"<br>";
$books=array("Trey"=>"4","Sam"=>"5","Dorry"=>"21");
echo "Trey has " . $books ['Trey'] . "books.";
echo"<br>";
$age=array("John"=>"23","Florida"=>"24","Sean"=>"25");
echo "Florida is " . $age ['Florida'] . "years old.";
echo"<br>";

//Multidimensional arrays
echo"<br>";
$cars=array(
    array("Toyota", 15,12),array("Mercedes",23,17),array("Vitz",15,8),array("Voxy",25,7)
);
echo $cars[0] [0] . "In stock:".$cars[0][1]. ",sold:".$cars[0][2].".<br>";
echo $cars[1] [0]  . "In stock:".$cars[1][1]. ",sold:".$cars[1][2]."<br>";
echo $cars[2] [0]  . "In stock:".$cars[2][1]. ",sold:".$cars[2][2]."<br>";
echo $cars[3] [0]  . "In stock:".$cars[3][1]. ",sold:".$cars[3][2]."<br>";


