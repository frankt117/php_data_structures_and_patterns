<?php

class Linked_List extends Linked_List_Base
{
    function __autoload($class_name) {
        include '/linked-list/'.$class_name . '.php';
    }

    function __construct()
    {
        require_once('../node/Node.php');
    }

    public function newNode()
    {
        $node = new Node();

        return $node;
    }
}


