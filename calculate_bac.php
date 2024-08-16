<?php
// echo "Hello this is calucationbac ";

function weight_convert($weight, $weight_unit)
{
    if ($weight_unit == 'kg') {
        return $weight * 2.20462;
    } else {
        return $weight;
    }
}

function gender_constant_convert($gender)
{
    if ($gender == 'male') {
        return 0.73;
    } else {
        return 0.66;
    }
}

$weight = $_POST["weight"];
$weight_unit = $_POST['unit'];
$gender = $_POST['gender'];
$num_drinks = $_POST['drinks'];
$alc_content = $_POST['alcohol_content'];
$time_elapsed = $_POST['time_elapsed'];

$gender_constant = gender_constant_convert($gender);
$check_weight = weight_convert($weight, $weight_unit);




echo "the weight is $weight ";
echo '<br>';
echo "The weght unit is $weight_unit";
echo '<br>';
echo $gender;
echo '<br>';
echo $num_drinks;
echo '<br>';
echo $alc_content;
echo '<br>';
echo $time_elapsed;
echo '<br>';
echo $gender_constant;
echo '<br>';
echo $check_weight;

$bac = (($num_drinks * 5.14) / ($weight * $gender_constant)) - (0.015 * $time_elapsed);

if ($bac > 0.08) {
    echo 'Unsafe to drive';
} else {
    echo 'Safe to drive';
}
