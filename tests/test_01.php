<?php

//calculate bill
$price = 3.79;
$gallons = 10;
$total = $price * $gallons;

echo "The bill for this trip to the gas station is $total $";
//-------


//--------
//substr() function
$myStr = "Hello World";
$newStr = substr($myStr, 0, 5);

echo $newStr; //retuns "Hello", because that's the first five characters
//--------


///------------
for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}
/* returns:
1
2
3
4
5
6
7
8
9
10
*/