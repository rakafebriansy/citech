<?php
if (!session_id()) session_start();
require_once '../app/init.php';

$url = App();;
functions($url[0],$url[1]);
views($url[0],$url[1]);