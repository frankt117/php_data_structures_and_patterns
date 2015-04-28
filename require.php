<?php

function __autoload($class_name) {
    if ( file_exists('node/'.$class_name.'.php') ) {
        require_once 'node/'.$class_name.'.php';
        return true;
    } else if ( file_exists('linked-list/'.$class_name.'.php') ){
        require_once 'linked-list/'.$class_name.'.php';
        return true;
    } else if ( file_exists('strategy/'.$class_name.'.php') ){
        require_once 'strategy/'.$class_name.'.php';
        return true;
    }
}