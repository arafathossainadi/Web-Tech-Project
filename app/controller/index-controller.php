<?php require_once 'data/core/back-end/index-service.php' ?>
<?php 
	switch ($action) {
		case "retrieve":
			$products = getAllProducts();
			$x = sizeof($products);
			break;
	}
 ?>