<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//переместить первые 4 элемента массива в конец массива
array_push($arr, $arr[0], $arr[1], $arr[2], $arr[3]);
array_splice($arr, 0, 4);
var_dump($arr);
echo "<br/>";
$firstArr = [
  'one' => 1,
  'two' => [
    'one' => 1,
  'seven' => 22,
  'three' => 32,
  ],
  'three' => [
'one' => 1,
'two' => 2,
  ],
  'foure' => 5,
  'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => 12,
],  
];
//получить все вторые элементы вложенных массивов
foreach ($firstArr	as $value) { 
	if (is_array($value)) { 
		var_dump(array_slice($value, 1,1));
	}
}
