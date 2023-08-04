<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			
			$query = "UPDATE home SET title='$title', description='$description' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: home_setting.php');
			}
?>
