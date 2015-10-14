<?php
/*
 Theme Support Files Include
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

require('theme/enqueue.php');
require('theme/menu.php');
require('theme/sidebar.php');
require('theme/support.php');
require_once('framework-checker.php');
if(class_exists("TitanFramework")){
    require_once('options.php');
}