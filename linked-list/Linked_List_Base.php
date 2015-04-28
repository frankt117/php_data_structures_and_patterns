<?php

abstract class Linked_List_Base implements Linked_List_Interface
{
    private $first;

    function __autoload($class_name) {
        include '/linked-list/'.$class_name . '.php';
    }

    function __construct()
    {
        $first = null;
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

    public function setFirst($node)
    {
        $this->first = $node;
    }

    public function getFirst()
    {
        return $this->first;
    }

}