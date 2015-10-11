<?php
//Start page load
$page_load = microtime(1);
//connect database.php
require 'include/database.php';

//Set page
$page = !empty($_GET["page"]) && file_exists("pages/$_GET[page].php") ? $_GET["page"] : 'home';

//include required page

require "templates/master.php";

//Page load time
//echo round(microtime(1)-$page_load, 4);
?>