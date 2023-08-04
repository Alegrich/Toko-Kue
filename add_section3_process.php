<?php
			include "connect1.php";
			
			$title = $_POST['title'];
			$foto = $_POST['foto'];
			$description = $_POST['description'];	
							
			$query = "insert into sect3(title, foto, description) values ('$title', '$foto', '$description')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: add_section3.php');      
			}
?>
