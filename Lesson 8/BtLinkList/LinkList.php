<?php

include_once "Node.php";

class LinkList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __Construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        $this->count++;

        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
    }

    public function addLast($data)
    {
        if ($this->firstNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else $this->addFirst($data);
    }

    public function add($index, $data)
    {
        if ($index == 1) {
            $this->addFirst($data);
        } else if ($index > 1 && $index <= $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 1; $i < $index - 1; $i++) {
                $currentNode = $currentNode->next;
            }
            $newNode = new Node($data);
            $newNode->next = $currentNode->next;
            $currentNode->next = $newNode;
            $this->count++;
        } else if ($index = $this->count + 1) {
            $this->addLast($data);
        } else {
            echo "Invalid index";
        }
    }

    public function removeIndex($index)
    {
        if ($this->firstNode == null) {
            echo "Empty List";
        }
        if ($index == 1) {
            if ($this->count == 1) {
                $this->firstNode = null;
                $this->lastNode = null;
                $this->count--;
            } else {
                $temp = $this->firstNode;
                $this->firstNode = $temp->next;
                $temp = null;
                $this->count--;
            }
        } else if ($index > 1 && $index <= $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 1; $i < $index - 1; $i++) {
                $currentNode = $currentNode->next;
            }
            $temp = $currentNode->next;
            $currentNode->next = $temp->next;
            if ($temp->next == null) {
                $this->lastNode = $currentNode;
            }
            $temp = null;
            $this->count--;
        } else {
            echo "Invalid position";
        }
    }

    public function removeObj($obj)
    {
        if (!$this->indexOf($obj)) {
            echo "Not found";
        } else {
            $this->removeIndex($this->indexOf($obj));
        }
    }

    public function get($index)
    {
        if ($index == 1) {
            return $this->firstNode->readNode();
        } else if ($index == $this->count) {
            return $this->lastNode;
        } else if ($index > 1 && $index < $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 1; $i < $index - 1; $i++) {
                $currentNode = $currentNode->next;
            }
            $findingNode = $currentNode->next;
            return $findingNode->readNode();
        } else {
            echo "Not found";
        }
    }

    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        if ($this->count == 0) {
            echo "Empty list";
        } else {
            $currentNode = $this->firstNode;
            $array = [];
            for ($i = 0; $i < $this->count; $i++) {
                array_push($array, $currentNode->readNode());
                $currentNode = $currentNode->next;
            }
            return $array;
        }
    }

    public function clone()
    {
        $cloneLinkList = new LinkList();
        for ($currenNode = $this->firstNode; $currenNode != null; $currenNode->next){
            $data = $currenNode->readNode();
            $cloneLinkList->addLast($data);
        }
        return $cloneLinkList;
    }

    public function contains($obj)
    {
        if ($this->indexOf($obj) == false) {
            echo "Not found";
        } else {
            echo "appears in list";
        }
    }

    public function indexOf($obj)
    {
        if ($this->count == 0) {
            return false;
        } else {
            $currenNode = $this->firstNode;
            $index = 0;
            while ($obj != $currenNode->readNode()) {
                if ($currenNode->next == null) {
                    break;
                } else {
                    $index++;
                    $currenNode = $currenNode->next;
                }
            }
            if ($index === 0) {
                return false;
            } else {
                return $index + 1;
            }
        }
    }
}   