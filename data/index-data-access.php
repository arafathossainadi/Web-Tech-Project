<?php require_once 'data/db-connection.php'; ?>
<?php
	function getAllProductsDateTimeWise(){
	    $sql = "SELECT * FROM Product ORDER BY DT DESC";       
	    $result = executeSQL($sql);
	    
	    $products = array();
	    for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
	        $products[$i] = $row;
	    }
	    return $products;
	}
	function addCustomerToDb($customer){
	    $sql = "INSERT INTO customer(Id, Name, Email, Address, ContactNumber, UserName, password,Gender,DOB) 
		VALUES(NULL, '$customer[name]','$customer[email]','$customer[address]','$customer[contactnumber]',
		'$customer[username]','$customer[password]','$customer[gender]','$customer[dob]')";
	    $result = executeSQL($sql);
	    return $result;
	}
	function getProductsByKeyFromDb($key){
	    $sql = "SELECT * FROM product WHERE Brand LIKE '%$key%' OR Color LIKE '%$key%'";
	    $result = executeSQL($sql);
	    
	    $shProduct = array();
	    for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
	        $shProduct[$i] = $row;
	    }
	    return $shProduct;
	}
?>