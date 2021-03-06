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
			    else {
			    	echo "<script>
		        		            alert('Nothing Found');
		        		            document.location='index.php?controller=public&action=index';
		        		         </script>";
		        		         die();
			    }
			}
			break;
		case "search":
			session_start();
				$searchKey =  ""; 
				if ($_SERVER['REQUEST_METHOD'] == "POST") {
				    $searchKey = trim($_POST['search']);
				    if (getProductsByKey($searchKey)==true) {
				    	$shProducts = getProductsByKey($searchKey);
				    	$_SESSION['sp'] = $shProducts;
				    	header("location: index.php?controller=public&action=search&tmp=$searchKey");
				    }
				    else {
				    	echo "<script>
			        		            alert('Nothing Found');
			        		            document.location='index.php?controller=public&action=index';
			        		         </script>";
			        		         die();
				    }
				}
			if (isset($_GET['choice'])) {
				$choice = $_GET['choice'];
				if ($choice =="price low to high") {
					$sortedProducts = sortByPriceLowToHigh();
				    	$_SESSION['sp'] = $sortedProducts;
				}
				elseif ($choice =="price high to low") {
					$sortedProducts = sortByPriceHighToLow();
				    	$_SESSION['sp'] = $sortedProducts;
				}
				elseif ($choice =="Alphabetically") {
					$sortedProducts = sortByAlphabetically();
				    	$_SESSION['sp'] = $sortedProducts;
				}	
			}
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
		        		    echo $msg;
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
		        			if ($userlogin['username']=="admin" && $userlogin['password']=="admin") {
		        				echo "<script>
		        		            alert('Login Successfull');
		        		            document.location='index.php?controller=admin&action=dashboard';
		        		         </script>";
		        		         die();
		        			}
		        			else{
		        				echo "<script>
		        				         alert('Login Successfull');
		        				         document.location='index.php?controller=customer&action=purchased-product';
		        				      </script>";
		        				      die();
		        			}
		        		   
		        		}
		        		else{
		        		    echo "<script>
		        		            alert('Username and Password Doesnt Match');
					document.location='index.php?controller=public&action=login';
		        		         </script>";
		        		}
		        	      }
			}
			break;
	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>