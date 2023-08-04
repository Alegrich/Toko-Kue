<?php
			include "connect1.php";
			
			$title = $_POST['title'];
			$description = $_POST['description'];
			$foto = $_POST['foto'];
			
			$query = "insert into home(title, description, foto) values ('$title', '$description', '$foto')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: add_section1.php');      
			}
?>
