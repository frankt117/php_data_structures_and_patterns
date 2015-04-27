<?php
    function __autoload($class_name) {
        include 'node/'.$class_name . '.php';
    }

    $node = new Node();

    $node->setValue(117);

    echo $node->getValue();

    $superNode = new Super_Node();

    echo "<br><br>";

    echo $superNode->getSuper();
