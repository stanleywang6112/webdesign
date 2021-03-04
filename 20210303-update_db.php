<?php
	if(isset($_POST["id"]) && isset($_POST["price"]) && isset($_POST["qty"])){
		$id = trim($_POST["id"]);
		$price = trim($_POST["price"]);
		$qty = trim($_POST["qty"]);

		if($id !="" && $price != "" && $qty != ""){
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="product";

			$conn = mysqli_connect($servername,$username,$password,$dbname);
			if(!$conn){
				die("連線失敗".mysqli_connect_error());
			}

			$sql = "UPDATE product_item SET Price='$price',Qty='$qty' WHERE id='$id'";

			if(mysqli_query($conn, $sql) && mysqli_affected_rows($conn) ==1 ){
				echo '{"state":true,"message":"更新成功!"}';
				//echo "更新成功".mysqli_affected_rows($conn);
			}else{
				echo '{"state":false,"message":"更新失敗!"}';
				//echo "更新失敗!".mysqli_affected_rows($conn),mysqli_error($conn);
			}
			mysqli_close($conn);
		}else{
			echo '{"state":false,"message":"欄位不能為空白!"}';
		}

	}else{
		echo '{"state":fasle,"message":"不允許未定義欄位!"}';
	}

?>