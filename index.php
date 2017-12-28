<?php
	$getsize = sizeof($_GET);
	if ($getsize == 0) {
		$_GET['controller'] = "public";
		$_GET['action'] = "index";
	}
    $controller = $_GET['controller']; //ex: person
    $action = $_GET['action']; //ex: create
    require_once "app/controller/$controller"."-controller.php";
?>