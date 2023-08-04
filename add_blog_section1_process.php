<?php
			include "connect1.php";
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$foto = $_POST['foto'];
			
			$query = "insert into blog(firstname, lastname, foto) values ('$firstname', '$lastname', '$foto')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: add_blog_section1.php');      
			}
?>
