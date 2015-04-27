<?php

class Node extends Node_Base implements Node_Interface
{
    function __autoload($class_name) {
        include '/node/'.$class_name . '.php';
    }

    public function getNextNode()
    {
        return $this->next;
    }

    public function setNextNode($node)
    {
        $this->next = $node;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}