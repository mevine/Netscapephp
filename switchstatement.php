<?php
$coursetaken="Education";
switch ($coursetaken) {
    case 'marketing':
        echo"i chose marketing";
        break;
    case "Architecture":
        echo"i chose architecture";
        break;
    case "Education":
        echo "i teach Education";
        break;
    case 'software Engineer':
        echo "i like creating my websites on my own";
        break;        
    default:
        echo "kindly choose the courses offered";
        break;
}
echo"<br>";
$month="January";
switch ($month) {
    case 'February':
        echo"my best month";
        break;
    case 'January':
        echo"sweet month";
        break;
    case 'March':
        echo"my birth month";
        break; 
    case 'April':
        echo"Zero chills";
        break;
    case 'May':
        echo"entrepreneural month";
        break;           
    default:
        echo"kindly choose your best month";
        break;
}
?>