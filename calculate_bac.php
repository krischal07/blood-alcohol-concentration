<?php
// echo "Hello this is calucationbac ";

$weight = $_GET["weight"];
$weight_unit = $_GET['unit'];
$gender = $_GET['gender'];
$num_drinks = $_GET['drinks'];
$alc_content = $_GET['alcohol_content'];
$time_elapsed = $_GET['time_elapsed'];
$gender_constant;

if ($weight_unit == 'kg') {
    $weight = $weight * 2.20462;
}

if ($gender == 'male') {
    $gender_constant = 0.73;
} else {
    $gender_constant = 0.66;
}


echo "the weight is $weight ";
echo $weight_unit;
echo $gender;
echo $num_drinks;
echo $alc_content;
echo $time_elapsed;
echo $gender;
// $bac = (($num_drinks * 5.14) / ($weight * $gender_constant)) - (0.015 * $time_elapsed);

if ($bac > 0.08) {
    echo 'Unsafe to drive';
} else {
    echo 'Safe to drive';
}
