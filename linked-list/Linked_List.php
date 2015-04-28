<?php

class Linked_List extends Linked_List_Base
{
    function __autoload($class_name) {
        require_once('linked-list/'.$class_name.'.php');
    }

    public function newNode()
    {
        $node = new Node();

        return $node;
    }
}


