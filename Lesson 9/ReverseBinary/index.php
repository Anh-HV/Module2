<?php
class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException("Stack is full");
        }
    }
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException("Stack is empty");
        } else {
            return array_shift($this->stack);
        }
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }

    function decToBinary($n)
    {
        // array to store binary number
        $binaryNum = [];

        // counter for binary array
        $i = 0;
        echo $n. " = ";
        while ($n >= 1) {

            // storing remainder in binary array
            $binaryNum[$i] = $n % 2;
            $n = $n / 2;
            $i++;
        }
        // printing binary array in reverse order
        for ($j = $i - 1; $j >= 0; $j--)
            echo $binaryNum[$j];
    }

    public function size(){
        return count($this->stack);
    }
}

$stack1 = new Stack();
echo "<pre >";
$stack1->push(1);
$stack1->push(2);
$stack1->push(3);
$stack1->push(4);
$stack1->push(2131233123);
print_r($stack1);

echo $stack1->size()."<Br />";

//  for($i=0;$i<count($stack1->stack); $i++){
//     $stack1->pop();
//     //  var_dump($number);
//     // //  $stack1->decToBinary($number);
//     // // $stack1->decToBinary($stack1->pop());
//     // echo "<br />";
//     // echo "<br />";
// }

while ($stack1->size()!= 0){
    $stack1->decToBinary($stack1->pop());
    echo "<br>";
    echo "<br>";
}



