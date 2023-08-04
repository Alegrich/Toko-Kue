<?php
		include "connect1.php";
		
		$keyword = $_POST['keyword'];
		
		$query = "SELECT * FROM post WHERE title LIKE '$keyword%'";
		$hasil = mysqli_query($koneksi, $query);
		
		
		$blog = mysqli_fetch_assoc($hasil);
		
		if($hasil){
				header("location: blog2.php?id=". $blog['id']);
		}

?>
