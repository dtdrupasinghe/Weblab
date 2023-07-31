<?php
$x = 6 ;
$y = 4;
$sum = $x+$y;
$diff = $x - $y;
$mul = $x * $y;
$divi = $x / $y;
echo "sum = $sum" ;
echo '<br>';
echo "Difference = $diff" ;
echo '<br>';
echo "Product = $mul" ;
echo '<br>';
echo "Devision = $divi" ;
echo '<br>';

$val = 5;
while($val<=15){
    echo $val++;
    echo '<br>';
}

echo '<br>';

$unit = 100;
$bill = 0;
if($unit<=50){

    $bill = $unit * 3.50;
    echo "Amount = $bill";

}elseif($unit>50 && $unit<=100){
        $unit = $unit - 50;
        $bill = $unit * 4.00 + 50 * 3.50;
        echo "Amount = $bill";      
}elseif($unit>100 && $unit<=150){
    $unit = $unit - 100;
    $bill = $unit * 5.20 + 50 * 3.50 + 50 * 4.0;
    echo "Amount = $bill";    

}else{
    $unit = $unit - 150;
    $bill = $unit * 6.50 + 50 * 3.50 + 50 * 4.0 + 50 * 5.20 ;
    echo "Amount = $bill";  
}

echo '<br>';

$dayNumber = 5;

switch ($dayNumber) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Invalid number";
}

echo '<br>';

$fruits = ["Apple", "Banana", "Orange", "Mango", "Pineapple"];

foreach ($fruits as $fruit) {
  echo $fruit . "<br>";
}



?>