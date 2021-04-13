<?php

include_once "ArrayList.php";
$arr = [1,2,3];
$list = new MyList();
$list->add(1);
$list->add(2);
$list->add(3);
$list->add(4);
$list->add(5);
$list->add(6);
$list->add(7);
$list->add(8);
$list->add(1);
$list->remove(2);
//$list->clear();
echo "<pre>";
print_r($list->arr);

echo $list->get(5)."<br />";
print_r($list->addAll($arr));
print_r($list->indexOf(1));
var_dump($list->isEmpty());
print_r($list->reset());
echo $list->size();
//print_r($list->sort());