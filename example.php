<?php
require './FrequencyControl.php';
$config = require './config.php';

$fc = new FrequencyControl($config);
var_dump($fc->check('act2', array('ip' => '192.168.1.2', 'id' => 5), true));