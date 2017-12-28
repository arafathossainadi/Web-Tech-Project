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
    function getProductBySUV($cat)
    {
        return getProductBySUVFromDb($cat);
    }
    function getProductBySEDAN($cat)
    {
        return getProductBySEDANFromDb($cat);
    }
    function getProductByCROSSOVER($cat)
    {
        return getProductByCROSSOVERFromDb($cat);
    }
    function getProductByPICKUPTRUCKS($cat)
    {
        return getProductByPICKUPTRUCKSFromDb($cat);
    }
    function getProductByEngine($cat)
    {
        return getProductByEngineFromDb($cat);
    }
    function getProductByHeadlight($cat)
    {
        return getProductByHeadlightFromDb($cat);
    }
 ?>