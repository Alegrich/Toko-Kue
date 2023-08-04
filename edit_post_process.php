<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$author = $_POST['author'];
			$description = $_POST['description'];
			$category = $_POST['category'];
			
			$query = "UPDATE post SET title='$title', author='$author', description='$description', categories='$category' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location:all_post.php');
			}
?>
