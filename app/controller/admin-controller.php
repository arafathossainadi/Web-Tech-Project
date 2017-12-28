<?php require_once 'app/validator/admin-validator.php' ?>
<?php 
	switch ($action) {
		case "dashboard":
			$customers = getAllCustomers();
		break;
		case "all-product-info":
			$products = getAllProducts();
			$totalstuffs = sizeof($products);
			$suvdb = getProductBySUV("SUV");
			$suv = sizeof($suvdb);
			$sedandb = getProductBySEDAN("SEDAN");
			$sedan = sizeof($sedandb);
			$crossoverdb = getProductByCROSSOVER("CROSSOVER");
			$crossover = sizeof($crossoverdb);
			$pickuptrucksdb = getProductByPICKUPTRUCKS("PICKUP TRUCK");
			$pickuptrucks = sizeof($pickuptrucksdb);
			$enginedb = getProductByEngine("Engine");
			$engine = sizeof($enginedb);
			$headlightdb = getProductByHeadlight("Headlight");
			$headlight = sizeof($headlightdb);
		break;
		case "delete-product":
			$id = $_GET['id'];
			$idProduct = getProductById($id);
			if (isset($_GET['idd'])) {
				$idd = $_GET['idd'];
				if(DeleteProduct($idd)==true){
					echo "<script>
							alert('Record Deleted');
					        document.location='index.php?controller=admin&action=all-product-info';
					      </script>";
					 die();
				}
			}
		break;
		case "edit-product":
			$id = $_GET['id'];
			$idProduct = getProductById($id);
			    $products = array("name"=>"", "category"=>"","brand"=>"","colors"=>"","price"=>"","instock"=>"",
				"feature"=>"");
			    if($_SERVER['REQUEST_METHOD']=="POST"){
			    	$products['id'] = $id;
			        $products['name'] = trim($_POST['name']);
			        $products['category'] = trim($_POST['category']);
			        $products['brand'] = trim($_POST['brand']);
			        $products['colors']=trim($_POST['colors']);
			        $products['price'] = trim($_POST['price']);
			        $products['instock'] = trim($_POST['instock']);
			        $products['feature'] = trim($_POST['feature']);
			        		if(editProduct($products) == true){
			        		   echo "<script>
			        		            alert('Record Edited');
			        		            document.location='index.php?controller=admin&action=all-product-info';
			        		         </script>";
			        		    die();
			        		}

			    }
			    break;

		case "product-details":
			/* $id = $_GET['id'];
			$idProduct = getProductById($id);
			if (isset($_GET['idd'])) {
				$idd = $_GET['idd'];*/
				/*  if(getProductById($id)==true){
					 die();
				} */ 
				if(isset($_GET['id'])){
                $idProduct = trim($_GET['id']);
                $idProduct = getProductById($idProduct);
            }
		break;
		case "add-product":
			$product = array("ModelNo"=>"", "Category"=>"","Brand"=>"","Color"=>"","Price"=>"","InStock"=>"",
			"Feature"=>"","Image"=>"");
		    $msg = "";
		    if($_SERVER['REQUEST_METHOD']=="POST"){
		        $product['ModelNo'] = trim($_POST['ModelNo']);
		        $product['Category'] = trim($_POST['Category']);
		        $product['Brand'] = trim($_POST['Brand']);
		        $product['Color'] = trim($_POST['Color']);
		        $product['Price'] = trim($_POST['Price']);
		        $product['InStock'] = trim($_POST['InStock']);
		        $product['Feature'] = trim($_POST['Feature']);
		        $product['Image'] =trim($_POST['Image']);
		       // var_dump(validateCustomerForCreate($customer));
		        //var_dump(addCustomer($customer));
		        	if (validateProductForCreate($product) == true) {
		        		if(addProduct($product) == true){
							//echo $_POST['password'];
		        		   echo "<script>
		        		            alert('Record Created');
		        		            document.location='index.php?controller=admin&action=all-product-info';
		        		         </script>";
		        		    die();
		        		}
		        		else{
		        			var_dump($msg);
		        		    $msg = "Internal Error<hr/>";
		        		    echo $msg;
		        		}
		        	}
		    }
		    break;
		break;
		
		case "add-employee":
			$employee = array("Name"=>"", "Email"=>"","Address"=>"","ContactNumber"=>"","Username"=>"","Gender"=>"",
			"Password"=>"","ConfirmPassword"=>"","Salary"=>"","ProductSold"=>"","Image"=>"");
		    $msg = "";
		    if($_SERVER['REQUEST_METHOD']=="POST"){
		        $employee['Name'] = trim($_POST['Name']);
		        $employee['Email'] = trim($_POST['Email']);
		        $employee['Address'] = trim($_POST['Address']);
		        $employee['ContactNumber'] = trim($_POST['ContactNumber']);
		        $employee['Username'] = trim($_POST['Username']);
		        $employee['Gender'] = trim($_POST['Gender']);
		        $employee['Password'] = trim($_POST['Password']);
				$employee['ConfirmPassword'] = trim($_POST['ConfirmPassword']);
		        $employee['Salary'] =trim($_POST['Salary']);
				$employee['Image'] =trim($_POST['Image']);
		       // var_dump(validateCustomerForCreate($customer));
		        //var_dump(addCustomer($customer));
		        	if (validateEmployeeForCreate($employee) == true) {
		        		if(addEmployee($employee) == true){
							//echo $_POST['password'];
		        		   echo "<script>
		        		            alert('Record Created');
		        		            document.location='index.php?controller=admin&action=employee-info';
		        		         </script>";
		        		    die();
		        		}
		        		else{
		        			var_dump($msg);
		        		    $msg = "Internal Error<hr/>";
		        		    echo $msg;
		        		}
		        	}
		    }
		    break;
		break;
		case "employee-info":
			$employee = getAllEmployee();
		break;

	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>