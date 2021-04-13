<?php
class MyList
{
    public $size;
    public $arr = [];

    public function insert($index, $obj)
    {
        $arr1 = array_slice($this->arr, 0, $index);
        array_push($arr1, $obj);
        $arr2 = array_slice($this->arr, $index + 1, count($this->arr));
        array_merge($arr1, $arr2);
    }
    public function add($obj)
    {
        array_push($this->arr, $obj);
    }
    public function remove($index)
    {
        array_splice($this->arr, $index, 1);
    }
    public function get($index)
    {
        return "Index[$index] = " . $this->arr[$index];
    }
    public function clear()
    {
        return $this->arr = [];
    }
    public function addAll($array)
    {
        return array_merge($this->arr, $array);
    }
    public function indexOf($obj)
    {
        $index = [];
        foreach ($this->arr as $key => $value) {
            if ($obj == $value) {
                $index[] = $key;
            }
        }
        return $index;
    }
    public function isEmpty()
    {
        if (count($this->arr) == 0)
            return true;
        else return false;
    }
    public function sort()
    {
        sort($this->arr);
    }
    public function reset()
    {
        return $this->arr;
    }
    public function size()
    {
        return "Total Element = ".count($this->arr);
    }
}
