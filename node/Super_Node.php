<?php

class Super_Node extends Node
{

    private $super;

    function __autoload($class_name) {
        include '/node/'.$class_name . '.php';
    }

    function __construct()
    {
        $this->super = true;

    }

    function getSuper()
    {
        return $this->super;
    }
}