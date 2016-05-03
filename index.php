<?php
header('Content-Type: text/html; charset=utf-8');

require 'configs/config.php';
require 'utils/Auth.php';

function __autoload($class){
	require LIBS.$class.'.php';
}

$Bootstrap = new Bootstrap();
$Bootstrap ->Init();
?>