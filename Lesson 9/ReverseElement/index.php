<?php
class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
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
}
 $arr = [1, 5, 6, 8, 9, 5, 0, 7];
 echo "<pre>";
 echo "Before = ";
 $length1 = count($arr);
 
print_r($arr);  
 $stack = new Stack($length1);
for ($i = 0; $i < $length1; $i++) {
    $stack->push(array_shift($arr));
}
    for ($i = 0; $i<$length1; $i++) {
        array_push($arr,$stack->pop());
    }
    echo "After = ";
    print_r($arr);