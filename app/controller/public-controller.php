<?php require_once 'app/validator/public-validator.php' ?>
<?php 
	switch ($action) {
		case "index":
			$products = getAllProducts();
			$searchKey =  ""; 
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
			    $searchKey = trim($_POST['search']);
			    if (getProductsByKey($searchKey)==true) {
			    	$shProducts = getProductsByKey($searchKey);
			    	session_start();
			    	$_SESSION['sp'] = $shProducts;
			    	header("location: index.php?controller=public&action=search&tmp=$searchKey");
			    }
			}
			break;
		case "search":
			
			break;
		case "registration":
		    $customer = array("name"=>"", "email"=>"","address"=>"","contactnumber"=>"","username"=>"","password"=>"",
			"confirmpassword"=>"","gender"=>"","dobday"=>"","dobmonth"=>"","dobyear"=>"");
		    $msg = "";
		    if($_SERVER['REQUEST_METHOD']=="POST"){
		        $customer['name'] = trim($_POST['name']);
		        $customer['email'] = trim($_POST['email']);
		        $customer['address'] = trim($_POST['address']);
		        $customer['contactnumber']=trim($_POST['contactnumber']);
		        $customer['username'] = trim($_POST['username']);
		        $customer['password'] = trim($_POST['password']);
		        $customer['confirmpassword'] = trim($_POST['confirmpassword']);
		        $customer['gender'] = trim($_POST['gender']);
		        $customer['dobday'] =trim($_POST['dobday']);
		        $customer['dobmonth'] =trim($_POST['dobmonth']);
		        $customer['dobyear'] =trim($_POST['dobyear']);
		        $customer['dob'] =$customer['dobday']."/".$customer['dobmonth']."/".$customer['dobyear'];
		       // var_dump(validateCustomerForCreate($customer));
		        //var_dump(addCustomer($customer));
		        	if (validateCustomerForCreate($customer) == true) {
		        		if(addCustomer($customer) == true){
							//echo $_POST['password'];
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
			case "login":
			$userlogin= array("username"=>"","password"=>"");
			if($_SERVER['REQUEST_METHOD']=="POST"){
			$userlogin['username']=trim($_POST['username']);
			$userlogin['password']=trim($_POST['password']);
			if (checkUserLogin($userlogin) == true) {
		        		if(userLogin($userlogin) == true){
							//echo $_POST['password'];
		        		   echo "<script>
		        		            alert('Login Successfull');
		        		            document.location='app/view/panel/customer/purchased-product.php?controller=public&action=purchased-product';
		        		         </script>";
		        		    die();
		        		}
		        		else{
		        			
		        		    echo "<script>
		        		            alert('Username and Password Doesn't Match');
									location.reload();
		        		         </script>";
								 
								die();
		        		}
		        	}
			}
			break;
			case "purchased-product":
			echo "<script>
			</script>";
			die();
			
			break;
	
	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>