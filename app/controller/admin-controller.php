<?php require_once 'app/validator/admin-validator.php' ?>
<?php 
	switch ($action) {
		case "dashboard":
			$customers = getAllCustomers();
		break;
		case "product-details":
		break;
		case "all-product-info":
			$products = getAllProducts();
		break;
		case "delete-product":
			$id = $_GET['id'];
			$idProduct = getProductById($id);
			if (isset($_GET['idd'])) {
				$idd = $_GET['idd'];
				if(DeleteProduct($idd)==true){
					echo "<script>
							alert('Record Deleted');
					        document.location='index.php?controller=admin&action=all-product-info';
					      </script>";
					 die();
				}
			}
		break;
		case "edit-product":
			$id = $_GET['id'];
			$idProduct = getProductById($id);
			    $products = array("name"=>"", "category"=>"","brand"=>"","colors"=>"","price"=>"","instock"=>"",
				"feature"=>"");
			    if($_SERVER['REQUEST_METHOD']=="POST"){
			    	$products['id'] = $id;
			        $products['name'] = trim($_POST['name']);
			        $products['category'] = trim($_POST['category']);
			        $products['brand'] = trim($_POST['brand']);
			        $products['colors']=trim($_POST['colors']);
			        $products['price'] = trim($_POST['price']);
			        $products['instock'] = trim($_POST['instock']);
			        $products['feature'] = trim($_POST['feature']);
			        		if(editProduct($products) == true){
			        		   echo "<script>
			        		            alert('Record Edited');
			        		            document.location='index.php?controller=admin&action=all-product-info';
			        		         </script>";
			        		    die();
			        		}

			    }
			    break;

		break;

	}
	require_once "app/view/panel/$controller/$action".".php";
 ?>