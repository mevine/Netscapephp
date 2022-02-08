<?php
// if statement
$num=34;
$num2=9;
if($num > $num2){
    echo"the answer is correct";
}
echo"<br>";
// if statement
if($num>=24 and $num2<=5){
    echo"correct answer";
}else {
    echo"incorrect answer";
}
echo"<br>";
// if ....elseif ..else
$mark=472;
if($mark>=0 && $mark<=39){
    echo"you fail";
}elseif ($mark>=40 && $mark<=59) {
    echo"you pass";
}elseif($mark>=60 && $mark<=79){
    echo"credit";
}elseif($mark>=80 && $mark<=100){
    echo"Distinction";
}else {
    echo"invalid grade";
}
?>