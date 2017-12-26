<?php require_once 'service/index-service.php' ?>
<?php 
	switch ($action) {
		case "index":
			$products = getAllProducts();
			$x = sizeof($products);
			break;
		case "registration":
		    $customer = array("name"=>"", "email"=>"");
		    // $customerErr = array("name"=>"", "email"=>"");
		    // $msg = "";

		    if($_SERVER['REQUEST_METHOD']=="POST"){
		        $customer['name'] = trim($_POST['name']);
		        $customer['email'] = trim($_POST['email']);

		            if(addCustomer($customer)==true){
		                echo "<script>
		                        alert('Record Created');
		                        document.location='index.php?controller=public&action=index';
		                     </script>";
		                die();
		            }
		            else{
		                $msg = "Internal Error<hr/>";
		            }
		    }
		    break;
	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>