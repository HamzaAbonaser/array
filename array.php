<?php
 //Deel1.
// $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
// $myArray[]='tram';
// echo $myArray[0];
// echo $myArray[1];
// echo $myArray[2];
// echo $myArray[3];
// echo $myArray[4];
// echo $myArray[5];
// echo $myArray[6];

//Deel2.
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
echo count($myArray);

// //Deel3.
// regel 2 "bar"
// regel 5 "4"
// regel 8 "Toyota"
// regel 9 "3"
// regel 12 "5"
// regel 19 "4"


// //Deel4.
$cijfersphp = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersphp) / count($cijfersphp),1);
echo "gemiddelde is".$gemiddelde;
?>

