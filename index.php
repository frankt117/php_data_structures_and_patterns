<?php

require_once("require.php");

$client = new Strategy_Client();

$client->run(new Strategy_Algo2());