<?php
$fruits = ['bananba', 'apple', 'mango', 'plum'];

array_unshift($fruits,'pineapplee');
array_push($fruits,'apicot');
array_unshift($fruits,'apple');
$fruits[]='orange';

$salad =[];
$salad[] = array_pop($fruits);
$salad[] = array_shift($fruits);
$salad[] = array_pop($fruits);
$salad[] =array_shift($fruits);

print_r($salad);