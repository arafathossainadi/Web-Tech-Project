<?php require_once 'data/db-connection.php'; ?>
<?php
	function getAllCustomersFromDb(){
	    $sql = "SELECT * FROM Customer";       
	    $result = executeSQL($sql);
	    
	    $customers = array();
	    for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
	        $customers[$i] = $row;
	    }
	    return $customers;
	}
?>