<?php
			include "connect1.php";
			
			$title = $_POST['title'];
			$image = $_POST['image'];
			
			$query = "insert into featured(title, foto) values ('$title','$image')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: featured.php');      
			}
?>
