<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			
			$query = "UPDATE blog SET firstname='$firstname', lastname='$lastname' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: blog_setting.php');
			}
?>
