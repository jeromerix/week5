<?php

if(isset($_POST['search'])){		

	$valueToSearch = $_POST['valueToSearch'];
	// search all tables
	$query = "SELECT * FROM `products` WHERE CONCAT(`seller_id`, `price`, `articles`, `info`, `timestamp`) LIKE '%".$valueToSearch."%'";
	$search_result = filterTable($query);
}
else{
	$query ="SELECT * FROM `products`";
	$search_result = filterTable($query);

}
function filterTable($query){
	$connect = mysqli_connect("localhost", "root", "", "databasewebshop");
	$filter_result = mysqli_query($connect, $query);
return $filter_result;
}
?>