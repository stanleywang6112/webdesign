<?php
	if(isset($_POST["id"])){
		$id = trim($_POST["id"]);
		if($id != ""){
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="product";

			$conn = mysqli_connect($servername,$username,$password,$dbname);
			if(!$conn){
				die("連線失敗".mysqli_connect_error());
			}

			$sql= "DELETE FROM product_item WHERE ID=$id";

			if(mysqli_query($conn, $sql) && mysqli_affected_rows($conn) ==1 ){
				echo '{"state":true,"message":"刪除成功!"}';
			}else{
				echo '{"state":false,"message":"刪除失敗!"}';
				//echo "刪除失敗!".mysqli_error($conn);
			}
			mysqli_close($conn);
		}else{
			echo '{"state":false,"message":"欄位不能為空白!"}';
		}

	}else{
		echo '{"state":fasle,"message":"不允許未定義欄位!"}';
	}

?>