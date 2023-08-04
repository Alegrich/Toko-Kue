<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			
			
			$query = "UPDATE home2 SET name='$name', price='$price' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: home_setting.php');
			}
?>
