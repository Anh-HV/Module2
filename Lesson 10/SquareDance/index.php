<?php 
include_once "Dancer.php";

function squareDance($queue1, $queue2)
{
    if($queue1->isEmpty()&&$queue2->isEmpty()){
        return "Out of human";
    }
    elseif($queue1->isEmpty()){
        return "Out of men <br />";
    }
    elseif($queue2->isEmpty()){
        return "Out of women <br />";
    }
    else {
        $male = $queue1->dequeue();
        $female = $queue2->dequeue();
        return "Mr.".$male->name . " and Mrs." . $female->name . "<br>";
    }
}

$male_queue = new SplQueue();
$female_queue = new SplQueue();

$male_queue->enqueue(new Dancer("1","male"));
$male_queue->enqueue(new Dancer("2","male"));
$male_queue->enqueue(new Dancer("3","male"));
$male_queue->enqueue(new Dancer("4","male"));

$female_queue->enqueue(new Dancer("5","female"));
$female_queue->enqueue(new Dancer("6","female"));
$female_queue->enqueue(new Dancer("7","female"));

echo squareDance($male_queue,$female_queue);
echo squareDance($male_queue,$female_queue);
echo squareDance($male_queue,$female_queue);
echo squareDance($male_queue,$female_queue);

