<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$image = $_POST['image'];
			
			$query = "UPDATE featured SET title='$title', foto='$image' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: featured.php');
			}
?>
