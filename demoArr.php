<?php
$arr = [1, 9, 3, 7, 5, 8]; 
$arr2 = array(); 

print_r($arr);
echo "<br>";

$arr[] = 15;
echo "<br/>";
var_dump($arr);

echo "<br/>";

foreach($arr as $k=>$a){
    echo "arr[$k] = $a <br/>";
}

echo "<br/>";
$arr3 = ['quang'=> '0941279782', 'tuan'=> '0941279783'];
print_r($arr3);

echo "<br/>";
$arr3['hung'] = '0941279784';
print_r($arr3);
echo "<br/>";

$keys = array_keys($arr3);
echo "<br/>";
print_r($keys);

$values = array_values($arr3);

arsort($arr3);
echo "<br/>";
print_r($arr3);
echo "<br/>";
$keysshort = array_keys($arr3);
print_r($keysshort);
?>
