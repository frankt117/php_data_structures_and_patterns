<?php

class Node extends Node_Base
{
    function __autoload($class_name) {
        include '/node/'.$class_name . '.php';
    }

}