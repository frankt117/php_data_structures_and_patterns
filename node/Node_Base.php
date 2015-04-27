<?php

abstract class Node_Base
{
    protected $value;
    protected $next;

    function __construct()
    {
        $this->value = null;
        $this->next = null;
    }
}