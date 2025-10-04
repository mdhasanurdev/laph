<?php

//$colors = array('red', 'green', 'blue');
//var_dump($colors);

$colors = ['red', 'green', 'blue'];
$colors[] = 'purple';
$colors[] = 'white';

array_pop($colors);
array_shift($colors);
array_unshift($colors, 'tomato');

print_r($colors);