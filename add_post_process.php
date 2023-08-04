<?php
			include "connect1.php";
		
		/*
			$title = $_POST['title'];
			$author = $_POST['author'];
			$description = $_POST['description'];
			$foto = $_POST['foto'];
			$category = $_POST['category'];
			
			$query = "insert into post(title, author, description, categories, media) values ('$title', '$author', '$description','$category', '$foto')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: all_post.php');      
			}
		*/
			
			$title = $_POST['title'];
			$author = $_POST['author'];
			$description = $_POST['description'];
			$category = $_POST['category'];
			
			if(!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])){
					$gambarDefault = "default.jpg";
					$query = "insert into post(title, author, description, categories, media) values ('$title', '$author', '$description','$category', '$gambarDefault')";
			}else{
					$featured_nama = $_FILES['foto']['name'];
					$featured_size = $_FILES['foto']['size'];
					$featured_tmp = $_FILES['foto']['tmp_name'];
					
					$target_file = "assets/" . $featured_nama;
					
					if ($featured_size > 5000000){
									header("location:add_post.php");
									return false;
					}else{
							move_uploaded_file($featured_tmp, $target_file);
							$query = "insert into post(title, author, description, categories, media) values ('$title', '$author', '$description','$category', '$featured_nama');";
							
							$query .= "insert into foto(name, date) values ('$featured_nama', NOW());";
							
					}
			}
			
			$hasil = mysqli_multi_query($koneksi, $query);
			
			if($hasil){
				header('location: all_post.php');      
			}
?>
