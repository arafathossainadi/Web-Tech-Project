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
	function getAllProductsFromDb(){
	    $sql = "SELECT * FROM Product";       
	    $result = executeSQL($sql);
	    
	    $products = array();
	    for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
	        $products[$i] = $row;
	    }
	    return $products;
	}
	function getAllEmployeeFromDb(){
	    $sql = "SELECT * FROM employee";       
	    $result = executeSQL($sql);
	    $employee = array();
	    for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
	        $employee[$i] = $row;
	    }
	    return $employee;
	}
	function getProductByIdFromDb($id){
			$sql = "SELECT * FROM product WHERE Id LIKE '%$id%'";
			$result = executeSQL($sql);
			
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function DeleteProductFromDb($idd){
			$sql = "DELETE FROM product WHERE Id LIKE '%$idd%'";
			$result = executeSQL($sql);
			return $result;
	}
	function editProductIntoDb($products)
	{
		    $sql = "UPDATE product SET ModelNo='$products[name]',Category='$products[category]',Brand='$products[brand]',Color='$products[colors]',Price='$products[price]',InStock='$products[instock]',Feature='$products[feature]' WHERE Id='$products[id]'";
		    $result = executeSQL($sql);
		    return $result;
	}
	function addProductIntoDb($product)
	{
		$sql = "INSERT INTO product(ModelNo, Category, Brand, Color, Price, InStock, Feature,Image) 
		VALUES('$product[ModelNo]','$product[Category]','$product[Brand]','$product[Color]',
		'$product[Price]','$product[InStock]','$product[Feature]','$product[Image]')";
	    $result = executeSQL($sql);
	    return $result;
	}
	function getProductBySUVFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE 'SUV'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function getProductBySEDANFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE 'SEDAN'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function getProductByCROSSOVERFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE 'CROSSOVER'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function getProductByPICKUPTRUCKSFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE '$cat'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function getProductByEngineFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE 'Engine'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function getProductByHeadlightFromDb($cat){
			$sql = "SELECT * FROM product WHERE Category LIKE 'Headlight'";
			$result = executeSQL($sql);
			$idproduct = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			    $idproduct[$i] = $row;
			}
			return $idproduct;
	}
	function addEmployeeIntoDb($employee)
	{
		$sql = "INSERT INTO employee(Name, Email, Address, ContactNumber, Username, Gender, Password,Salary,Image,JoiningDate) 
		VALUES('$employee[Name]','$employee[Email]','$employee[Address]','$employee[ContactNumber]',
		'$employee[Username]','$employee[Gender]','$employee[Password]','$employee[Salary]','$employee[Image]',now())";
	    $result = executeSQL($sql);
	    return $result;
	}
?>