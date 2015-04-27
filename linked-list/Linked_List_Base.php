<?php

abstract class Linked_List_Base
{
    private $first;

    function __autoload($class_name) {
        include '/linked-list/'.$class_name . '.php';
    }

    function __construct()
    {
        require_once('../node/Node.php');
        $first = null;

    }

    public function newNode($value)
    {
        $node = new Node();
        $node->value = $value;

        return $node;
    }

    public function isEmpty ()
    {
        if ($this->first) {
            return false;
        } else {
            return true;
        }
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