<?php require_once 'data/index-data-access.php' ?>
<?php 
function getAllProducts(){
        return getAllProductsDateTimeWise();
    }
    function addCustomer($customer){
    	return addCustomerToDb($customer);
    }
	function userLogin($userlogin){
		
			return checkLoginToDb($userlogin);
		
    	
    }
 ?>