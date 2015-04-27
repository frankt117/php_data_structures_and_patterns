<?php

interface Node_Interface
{
    public function getValue();
    public function setValue($value);
    public function getNextNode();
    public function setNextNode($node);
}