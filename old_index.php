<?php
class Node
{
    public $value = null;
    public $nextNode = null;
}

class LinkedListStack
{
    private $first;

    function __construct()
    {
        $this->first = null;
    }

    public function isEmpty ()
    {
        if ($this->first) {
            return false;
        } else {
            return true;
        }
    }

    public function push($value)
    {
        $oldFirst = $this->first;

        $newFirst = new Node();
        $newFirst->value = $value;
        $newFirst->nextNode = $oldFirst;

        $this->first = $newFirst;
    }

    public function pop()
    {
        $top = $this->first;

        $this->first = $top->nextNode;

        return $top->value;
    }

    public function printAll()
    {
        $current = $this->first;
        echo $current->value;
        echo "<br>";

        while($current->nextNode)
        {
            $current = $current->nextNode;
            echo $current->value;
            echo "<br>";
        }
    }

}

$list = new LinkedListStack();
$list->push(10);
$list->push(117);
$list->push(2315);
$list->push(100);
$list->printAll();

echo "<br>";
echo $list->pop();
echo "<br>";
echo "<br>";

$list->printAll();

