<?php
$num=23;
$num1=9;
if ($num > $num1){
    echo "The answer is correct";
}
echo "<br>";
//if..else
if ($num>=21 || $num1<=5){
    echo "Correct answer";
}else{
    echo "Incorect answer";
}
echo "<br>";
// if...elseif...else
$mark=72;
if ($mark>=0 && $mark<=39){
    echo "You have failed";

}elseif ($mark>=40 and $mark<=59){
    echo "Pass";
}elseif ($mark>=60 and $mark<=79){
    echo "Credit";
}elseif ($mark>=80 and $mark<=100){
    echo "Distinction";
}else{
    echo "Not in range";
}