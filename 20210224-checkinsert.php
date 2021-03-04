<?php
header('Access-Control-Allow-Origin:*');
$p_name = trim($_POST["name"]);

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

$sql = "SELECT ID, Name, Price, Qty FROM product_item WHERE Name = '$p_name'";

$result = mysqli_query($conn, $sql);
$myarray = array();
if (mysqli_num_rows($result) > 0){
	echo '{"state":false,"message": "資料己經存在,不能使用!"}';
}else{
	echo '{"state":true,"message": "資料不存在,可以使用!"}';
}

mysqli_close($conn);
?>