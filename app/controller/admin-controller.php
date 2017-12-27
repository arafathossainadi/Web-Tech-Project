<?php require_once 'app/validator/admin-validator.php' ?>
<?php 
	switch ($action) {
		case "dashboard":
			$customers = getAllCustomers();
		break;
		case "product-details":
		break;
	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>