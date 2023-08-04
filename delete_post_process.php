 <?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from post where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location:all_post.php");
		}
?>
