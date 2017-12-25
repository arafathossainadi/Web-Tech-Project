<?php require_once 'db-connection.php'; ?>
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
?>