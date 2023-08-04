<?php
			include "connect1.php";
			
			$title = $_POST['title'];
			$foto = $_POST['foto'];
			$rating = $_POST['rating'];
			$price = $_POST['price'];				
							
			$query = "insert into product(cakename, cakefoto, rating, price) values ('$title', '$foto', '$rating', $price)";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: home_setting.php');      
			}
?>
