<?php 
include_once "LinkList.php";

$data1 = new stdClass();
$data1->id = 1;
$data1->name = "BMW";
$data1->colot = "blue";

$data2 = new stdClass();
$data2->id = 2;
$data2->name = "TOY";
$data2->colot = "red";

$data3 = new stdClass();
$data3->id = 3;
$data3->name = "VIN";
$data3->colot = "green";

$data4 = new stdClass();
$data4->id = 4;
$data4->name = "ROL";
$data4->colot = "yellow";

$data5 = new stdClass();
$data5->id = 5;
$data5->name = "YAM";
$data5->colot = "brown";

$linkList = new LinkList();
$linkList->addFirst($data1);
$linkList->addLast($data2);
$linkList->addLast($data3);

echo "<pre>";
+
($linkList->printList());
echo "<hr>";

$linkList->add(2,$data4);
echo "<pre>";
print_r($linkList->printList());
echo "<hr>";

print_r($linkList->indexOf($data2));
echo "<hr>";

$linkList->removeIndex(2);
print_r($linkList->printList());
echo "<hr>";

$linkList->removeObj($data1);
print_r($linkList->printList());
echo "<hr>";

print_r($linkList->get(1));
echo "<hr>";

print_r($linkList->size());
echo "<hr>";

print_r($linkList->contains($data3));