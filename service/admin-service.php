<?php require_once 'data/admin-data-access.php' ?>
<?php 
    function getAllCustomers(){
        return getAllCustomersFromDb();
    }
    function getAllProducts(){
        return getAllProductsFromDb();
    }
    function getProductById($id){
        return getProductByIdFromDb($id);
    }
    function DeleteProduct($idd){
        return DeleteProductFromDb($idd);
    }
    function editProduct($products)
    {
    	return editProductIntoDb($products);
    }
	function addProduct($product)
    {
    	return addProductIntoDb($product);
    }
 ?>