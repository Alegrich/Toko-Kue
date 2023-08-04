<?php
		include "connect1.php";
		
			$foto = $_POST['foto'];
			
			$query = "insert into galery(foto) values ('$foto')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: about_setting.php');   		
			}		
?>
