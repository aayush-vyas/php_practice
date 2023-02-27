<?php
echo '<h1>'.'first example'.'</h1>';

$source_array = [
    [1, 'John'],
    [2, 'Jane'],
];

foreach ($source_array as [$id, $name]) {
    echo $id . ':<br>'. $name;
}



echo '<h1>'.'Second example'.'</h1>';


$arr1 = ["a" => 1];
$arr2 = ["b" => 2];
$arr3= ["a" => 0,];
var_dump($arr3);

?>

