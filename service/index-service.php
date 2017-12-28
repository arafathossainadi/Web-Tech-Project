<?php require_once 'data/index-data-access.php' ?>
<?php 
    function getAllProducts(){
        return getAllProductsDateTimeWise();
    }
    function addCustomer($customer){
    	return addCustomerToDb($customer);
    }
    function getProductsByKey($key){
    	return getProductsByKeyFromDb($key);
    }
    function userLogin($userlogin){
            return checkLoginToDb($userlogin);
    }
    function sortByPriceLowToHigh(){
            return sortByPriceLowToHighIntoDb();
    }
    function sortByPriceHighToLow()
    {
            return sortByPriceHighToLowIntoDb();
    }
    function sortByAlphabetically()
    {
            return sortByAlphabeticallyIntoDb();
    }
    
 ?>