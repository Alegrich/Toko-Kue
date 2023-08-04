<?php
			include "connect1.php";
			
			$news = $_POST['news'];
			$title = $_POST['title'];
			
			$query = "insert into cardblog(news, title) values ('$news','$title')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: add_card.php');      
			}
?>
