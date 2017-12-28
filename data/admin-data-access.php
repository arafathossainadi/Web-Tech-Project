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
?>