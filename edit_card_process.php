<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$title = $_POST['title'];
			$news = $_POST['news'];
			
			$query = "UPDATE cardblog SET title='$title', news='$news' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location:add_card.php');
			}
?>
