<?php
// while loop
$num=10;
while ($num <= 20) {
    echo"Nambari ni: $num<br>";
    $num+=2;
}
echo"<br>";
// do while
$num1=8;
do {
    echo"the number is :$num1 <br>";
    $num1++;
} while ($num1<= 15);



echo"<br>";
$num2=100;
while ($num2 <= 100 and $num2>=0) {
    echo"number:$num2<br>";
    $num2-=10;
}


 echo"<br>";
$num3=100;
 do {
    echo"number:$num3<br>";
    $num3-=10;
 } while ($num3 <= 100 and $num3>=0);
?>

