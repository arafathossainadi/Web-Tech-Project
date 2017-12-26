<?php require_once 'app/validator/public-validator.php' ?>
<?php 
	switch ($action) {
		case "index":
			$products = getAllProducts();
			$x = sizeof($products);
			break;
		case "registration":
		    $customer = array("name"=>"", "email"=>"","address"=>"","contactnumber"=>"","username"=>"","password"=>"");
		    // $customerErr = array("name"=>"", "email"=>"");
		    $msg = "";

		    if($_SERVER['REQUEST_METHOD']=="POST"){
		        $customer['name'] = trim($_POST['name']);
		        $customer['email'] = trim($_POST['email']);
		        $customer['address'] = trim($_POST['address']);
		        $customer['contactnumber'] = trim($_POST['contactnumber']);
		        $customer['username'] = trim($_POST['username']);
		        $customer['password'] = trim($_POST['password']);
		        var_dump(validateCustomerForCreate($customer));
		        var_dump(addCustomer($customer));
		        	if (validateCustomerForCreate($customer) == true) {
		        		if(addCustomer($customer) == true){
		        		    echo "<script>
		        		            alert('Record Created');
		        		            document.location='index.php?controller=public&action=index';
		        		         </script>";
		        		    die();
		        		}
		        		else{
		        			var_dump($msg);
		        		    $msg = "Internal Error<hr/>";
		        		}
		        	}
		    }
		    break;
	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>