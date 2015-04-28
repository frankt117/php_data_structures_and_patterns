<?php

abstract class Node_Base implements Node_Interface
{
    protected $value;
    protected $next;

    function __construct()
    {
        $this->value = null;
        $this->next = null;
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