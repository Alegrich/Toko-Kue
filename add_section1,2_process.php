<?php
			include "connect1.php";
			
			$name = $_POST['name'];
			$photo = $_POST['photo'];
			$price = $_POST['price'];
			
			$query = "insert into home2(name, photo, price) values ('$name', '$photo', '$price')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: home_setting.php');      
			}
?>
