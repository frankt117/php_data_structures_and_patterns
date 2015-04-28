<?php

class Strategy_Client
{
    public function run(Strategy_Interface $strategy)
    {
        $strategy->runLogic();
    }
}