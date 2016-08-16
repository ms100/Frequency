<?php
require './FrequencyControl.php';
$config = require './config.php';

FrequencyControl::initialize($config);
var_dump(FrequencyControl::check('act2', array('ip' => '192.168.1.2', 'id' => 5), true));