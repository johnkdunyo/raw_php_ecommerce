<?php 
include('admin//db_connect.php');


$prod_data = array();

$qry = $conn->query("SELECT * FROM  product_list ");

while($rows = $qry->fetch_assoc()){

    $prod_data[$rows['id']] = $rows['img_path'];
}




print_r($prod_data);

//var_dump($qry);
print_r( array_slice($prod_data, 0, 3, true));
print_r( array_slice($prod_data, 3, 3, true));









?>

