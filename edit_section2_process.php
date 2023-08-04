<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$rating = $_POST['rating'];
			$price = $_POST['price'];
			
			$query = "UPDATE product SET cakename='$title', rating='$rating', price='$price' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: home_setting.php');
			}
?>
