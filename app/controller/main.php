<?php
	$getsize = sizeof($_GET);
	if ($getsize == 0) {
		$_GET['controller'] = "index";
		$_GET['action'] = "index";
	}
    $controller = $_GET['controller']; //ex: person
    $action = $_GET['action']; //ex: create
    require_once "$controller"."-controller.php";
    var_dump($products);
?>