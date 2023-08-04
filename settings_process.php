<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$logo = $_POST['logo'];
			$instagram = $_POST['instagram'];
			$facebook = $_POST['facebook'];
			$twitter = $_POST['twitter'];
			$linkedin = $_POST['linkedin'];
			
			
			$query = "UPDATE footer SET logo='$logo', instagram='$instagram', facebook='$facebook', twitter='$twitter', linkedin='$linkedin' WHERE id='$id'";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: settings.php');
			}
?>
