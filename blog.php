<?php
				include "connect1.php";
				
				
				//search 
				
				if(isset($_POST['search']) ){
							$post = search($_POST["keyword"]);
				}
				session_start();
				include "connect1.php";
				if(!isset($_SESSION['login'])){
						 	header('location: login.php');
						 	exit;
				}
				$name = $_SESSION['name'];
																						
				$query = "select * from user where name = '$name'";
				$hasil = mysqli_query($koneksi, $query);
																						
				$username= mysqli_fetch_assoc($hasil);
?>
<html>
		<head>
				<title>Blog</title>
				<link href="blog.css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
				<link href="blog.css" rel="stylesheet">
		</head>
		<style>
			<?php
						include "blog.css";
			?>
			@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap');
			.pagination {
					font-family: "Montserrat", sans-serif;
					display: flex;
					list-style: none;
					margin-left: 40rem;
					padding: 0;
				}

				.pagination li {
					margin: 0 5px;
				}

				.pagination a {
					display: inline-block;
					padding: 5px 10px;
					border: 1px solid #ccc;
					border-radius: 20px;
					color: #333;
					text-decoration: none;
				}

				.pagination a.active {
					background-color: #EA7738;
					color: #fff;
				}
				.profile-image {
								width: 50px;
								height: 50px;
								border-radius: 50%;
								overflow: hidden;
						}

						.profile-image img {
								width: 100%;
								height: 100%;
								object-fit: cover;
						}
		</style>	
		<body>
			<header>
				<?php
																				include "connect1.php";

																				$name = 'select * from footer';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
										?>
				<img src="./assets/<?= $data['logo']?>" width="214" height="44">
				<?php
						}if(empty($data)){
				?>
				<h2>Logo Here</h2>
				<?php
					}
				?>
					<ul data-aos="fade-down">
						<li><a href="home.php">Home</a></li>
					 	<li><a href="about.php">About us</a></li>
					 	<li><a href="blog.php">Blog</a></li>
					 	<li><a href="contact.php">Contact</a></li>					
					</ul>
					<div class="icon" data-aos="fade-left">
								<form class="" action="search_process.php" method="post">
													<div class="search-box">
																<input class="search-txt" type="text" name="keyword" placeholder="Type to search" autocomplete="off" >
																<a class="search-btn" name="search" href="#">
																			<img src="./assets/Vector.svg">
																</a>
													</div>
								</form>
								<div class="profile-image">
										<a href="login.php">
												<img style="cursor: pointer;" src="./assets/<?php print_r($username['profile']); ?>" alt="Profile Picture">
										</a>
							</div>
							<div style="margin: 15px; font-family: 'Poppins'; font-weight: 600; width: 20px;">
											<?php print_r($_SESSION['name']); ?>
							</div>
					</div>
				
			</header>
			
	<!-- Section SIte -->		
			<section class="sect1">
							<div class="image-text">
										<?php
																				include "connect1.php";

																				$name = 'select * from blog';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
										?>
										<h1 data-aos="fade-left"><?= $data['firstname']?></h1>
											<img data-aos="fade-up" src="./assets/<?= $data['foto']?>">
										<h1 data-aos="fade-right"><?= $data['lastname']?></h1>
							</div>
							<?php
								}
							?>
			</section>
			
	<!-- Section SIte2 -->
			<section class="sect2">
							<div class="contain2">
												<div class="left-column">
																<?php
																					include "connect1.php";

																					$jumlahDataPerhalaman = 2;
																					$halamanAktif = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
																					$mulaiData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

																					$name = "SELECT * FROM post ORDER BY id DESC LIMIT $mulaiData, $jumlahDataPerhalaman";


																					$hasil = mysqli_query($koneksi, $name);

																					$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

																					foreach($data as $row) {
																					?>
																	<a class="card-body" href="blog2.php?id=<?= $row['id']?>" style="text-decoration: none;">
																				<div class="card-img-body">
																							<img src="./assets/<?= $row['media']?>">
																				</div>
																				<div class="card-date">
																							<h4><?= $row['date']?></h4>
																				</div>
																				<div class="card-info">
																							<h3><?= $row['title']?></h3>
																				</div>
																				<div class="card-info2">
																							<h4><?= $row['description']?></h4>
																				</div>
																	</a>
																	<?php
																		}if(empty($data)){
																	?>
																	<div class="card-body" data-aos="fade-right">
																				<div class="card-img-body">
																							<img src="./assets/default.jpg">
																				</div>
																				<div class="card-date">
																							<h4>Date Here</h4>
																				</div>
																				<div class="card-info">
																							<h3>Title Here</h3>
																				</div>
																				<div class="card-info2">
																							<h4>Description Here</h4>
																				</div>
																	</div>
																	<?php
																	}
																	?>
												</div>
												
															<div class="right-column">
																		<h1 data-aos="fade-right" class="t">Populer Post</h1>
																		<?php
																		include "connect1.php";

																		$name = 'select * from featured';
																		$hasil = mysqli_query($koneksi, $name);

																		$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

																		foreach($data as $row) {
																				?>
																				<div class="card_img-body"  data-aos="fade-left" >
																						<img data-aos="fade-left" src="./assets/<?= $row['foto']?>" alt="" class="card_img">
																						<div class="card_date">
																								<h4 data-aos="fade-left" ><?= $row['date']?></h4>
																								<h3 data-aos="fade-left" ><?= $row['title']?></h3>
																						</div>
																				</div>
																		<?php
																		}
																		if(empty($data)){
																		?>
																		<div class="card_img-body"  data-aos="fade-left" >
																				<img data-aos="fade-left" src="./assets/default.jpg" alt="" class="card_img">
																				<div class="card_date">
																						<h4 data-aos="fade-left" >Insert date Here</h4>
																						<h3 data-aos="fade-left" >Insert title Here</h3>
																				</div>
																		</div>
																		<?php
																		}
																		?>	
															</div>
												
							</div>
										<ul class="pagination">
												<?php
													$totalData = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM post"));
													$totalHalaman = ceil($totalData / $jumlahDataPerhalaman);

													for($i = 1; $i <= $totalHalaman; $i++) {
														if($i == $halamanAktif) {
															echo "<li><a href='?halaman=$i' class='active'>$i</a></li>"; 
														} else {
															echo "<li><a href='?halaman=$i'>$i</a></li>";
														}
													}
												?>
											</ul>
			</section>
			
<!-- Section SIte3 -->
			
			
<!-- Section SIte4 -->
			
		
			
<!-- Section SIte5 -->
			
					<!-- Footer Site -->
					
				<footer>
							<div class="sect6">
											<div class="logomedsos">
																<?php
																				include "connect1.php";

																				$name = 'select * from footer';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
										?>
										<img src="./assets/<?= $data['logo']?>" width="214" height="44">
										<?php
												}if(empty($data)){
										?>
										<h2>Logo Here</h2>
										<?php
											}
										?>
														<div class="akun">
																	<?php
																				include "connect1.php";

																				$name = 'select * from footer';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
														?>
																	<a class="fa-brands fa-square-instagram fa-3x" href="<?= $data['instagram']?>"></a>
																	<a class="fa-brands fa-square-facebook fa-3x" href="<?= $data['facebook']?>"></a>
																	<a class="fa-brands fa-square-twitter fa-3x" href="<?= $data['twitter']?>"></a>
																	<a class="fa-brands fa-linkedin fa-3x" href="<?= $data['linkedin']?>"></a>
														<?php
															}
														?>			
														</div>
											</div>
											<div class="footer-link">
														<div class="footer-head">Service</div>
																<div class="text-menu">
																			<div><a> Lorem </a></div>
																			<div><a> ipsum dolor </a></div>
																			<div><a> Erat eu porta </a></div>
																			<div><a> Uteuismo </a></div>
																			<div><a> Uteuismod </a></div>
															</div>
											</div>
											<div class="footer-link">
														<div class="footer-head">About Us</div>
																<div class="text-menu">
																			<div><a> Lorem </a></div>
																			<div><a> ipsum dolor </a></div>
																			<div><a> Erat eu porta </a></div>
																			<div><a> Uteuismo </a></div>
																			<div><a> Uteuismod </a></div>
															</div>
											</div>
											<div class="footer-link">
														<div class="footer-head">Company</div>
																<div class="text-menu">
																			<div><a> Lorem </a></div>
																			<div><a> ipsum dolor </a></div>
																			<div><a> Erat eu porta </a></div>
																			<div><a> Uteuismo </a></div>
																			<div><a> Uteuismod </a></div>
															</div>
											</div>
											<div class="footer-link hitam">
														<div class="footer-head1">Lorem Ipsum</div>
														<div class="text-menu1">
																	Lorem ipsum dolor sit consectetur<br>
maximus nec erat eu porta. Ut elemen<br>
euismod, eros ante faucibus nulla<br>
														</div>
														<div class="text-send">
																				<input placeholder= "Your e-mail@domain.com" type="Email" class="input">
																				<button class="send">Send</button>  
														</div>		
											</div>
							</div>
							<div class="last">
										 <hr>
		  								<div>Copyright 2018&copy;Food Bug All Right Reversed</div>
							</div>
				</footer>
				<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  			<script>
    				AOS.init({
    						duration: 1000,
    				});
  			</script>  
		</body>
</html>
