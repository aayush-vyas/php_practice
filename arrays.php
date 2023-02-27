<?php
echo '<h1>'.'First example'.'</h1>';
$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

echo '<pre>' , var_dump($array) , '</pre>';


echo '<h1>'.'Second example'.'</h1>';

  $array = array(
     "foo" => "bar",
     42    => 24,
     "multi" => array(
          "dimensional" => array(
              "array" => "foo"
          )
     )
 );

 echo "<pre>". var_dump($array["foo"])."</pre>";
 echo "<pre>". var_dump($array[42])."</pre>";
 echo "<pre> ".var_dump($array["multi"]["dimensional"]["array"])."</pre>"; 


echo '<h1>'.'Third example'.'</h1>';

function get_array(){
    return array(1,2,3,4,5);    
}

$secondElement = get_array()[2];
echo var_dump(get_array());
echo "<br>";
echo $secondElement;


echo '<h1>'.'fourth example'.'</h1>';

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
                
unset($arr[5]); // This removes the element from the array
echo '<pre>'; print_r($arr); echo '</pre>';
unset($arr);    // This deletes the whole array


?>
