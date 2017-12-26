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
	    $sql = "INSERT INTO customer(id, name, email) VALUES(NULL, '$customer[name]', '$customer[email]')";
	    $result = executeSQL($sql);
	    return $result;
	}
?>