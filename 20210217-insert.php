<?php
	if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["qty"])){
		$p_name = trim($_POST["name"]);
		$p_price = trim($_POST["price"]);
		$p_qty = trim($_POST["qty"]);
		if($p_name !="" && $p_price !="" && $p_qty !=""){

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "product";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if(!$conn){
				die("資料庫連結失敗!".mysqli_connect_error());
			}

			$sql = "INSERT INTO product_item (Name, Price, Qty) VALUES ('$p_name','$p_price','$p_qty')";

			if (mysqli_query($conn,$sql)){
				echo '{"state":true,"message": "資料新增成功!"}';
			}else{
				echo '{"state":false,"message": "資料新增失敗!"}';
			}
			mysqli_close($conn);
		}else{
			echo '{"state":false,"message": "不允許空白欄位!"}';
		}
			
	}else{
		echo '{"state":fasle,"message": "不允許未定義欄位!"}';
	}
	
?>