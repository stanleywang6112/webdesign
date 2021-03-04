<?php
header('Access-Control-Allow-Origin:*');
$servername = "localhost";
$username = "root";
$passowrd = "";
$dbname = "product";
//連接資料庫
$conn = mysqli_connect($servername,$username,$passowrd,$dbname);
mysqli_query($conn,"SET NAMES UTF8");

if(!$conn){
	die("連線失敗:".mysqli_connect_error());
}

$sql = "SELECT ID, Name, Price, Qty, Create_at FROM product_item ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);
$myarray = array();
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$myarray[] = $row;
	}
	echo json_encode($myarray);
}else{
	echo ("沒有資料!");
}

mysqli_close($conn);
?>