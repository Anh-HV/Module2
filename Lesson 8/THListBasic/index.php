<?php

include_once "ArrayList.php";

$list = new ArrayList();
$list->add("wasd");
$list->add(2);

echo $list->get(0);