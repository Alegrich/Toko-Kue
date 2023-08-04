<?php
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
				<title>Blog2</title>
				<link href="blog2.css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		</head>
		<style>
					<?php
								include "blog2.css";
								
					?>
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
				<img data-aos="fade-right" src="./assets/<?= $data['logo']?>" width="214" height="44">
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
								<div class="search-box">
											<input class="search-txt" type="text" name="" placeholder="Type to search">
											<a class="search-btn" href="#">
														<img src="./assets/Vector.svg">
											</a>
								</div>
								<div class="profile-image">
											<a href="login.php">
													<img style="cursor: pointer;" src="./assets/<?php print_r($username['profile']); ?>" alt="Profile Picture">
											</a>
									</div>
									<div style="margin: 15px; font-family: 'Poppins'; font-weight: 600; width: 20px;">
											<?php print_r($_SESSION['name']); ?>
									</div>
								</div>		
					</div>	
			</header>
			
	<!-- Section SIte -->		
			<section class="sect1">
							
			</section>
	<!-- Section SIte2 -->
			<section class="sect2">
							<div class="contain3">
												<div class="left-column">
															<div class="contain-3">
																		<h1 data-aos="fade-down" >Blogs</h1>
																		<h4 data-aos="fade-right">Home > Detail Blog </h4>
																		<?php
																			include "connect1.php";
																			
																			$id = $_GET['id'];
																				
																				$query = "select * from post where id = '$id'";
																				$hasil = mysqli_query($koneksi, $query);
																				
																				$data = mysqli_fetch_assoc($hasil);

																				if($data !=null){
																		?>
																			<div class="featured-image" data-aos="zoom-out" style="background-image: url('./assets/<?= $data['media']?>')"></div>
																			
																			<h2 data-aos="fade-right"><?= $data['title']?>
																			</h2>
																			
																			<h3 data-aos="fade-right">
																				<span><?= $data['author']?></span> <?= $data['date']?>
																			</h3>
																			<br>
																			<br>
																			<br>
																			<br>		
																			<p data-aos="fade-right">
																					<?= $data['description']?>
																			</p>
																		<?php
																				} else {
																		?>
																			<div class="featured-image" data-aos="zoom-out" style="background-image: url('./assets/default.jpg')"></div>
																			
																			
																			<h2 data-aos="fade-right">Insert Your Title Here
																			</h2>
																			
																			<h3 data-aos="fade-right">
																				<span>Author Name</span> Date Publish
																			</h3>
																			<br>
																			<br>
																			<br>
																			<br>		
																			<p data-aos="fade-right">
																					Insert Your Description Here
																			</p>
																		<?php
																			}
																		?>
																		
																		<br>
																		<br>
																		<br>
																		<br>
																		<div class="down"> 
																				<h3 class="wond" data-aos="fade-right">Share to:</h3>
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
												</div>
												<div class="right">
															<div class="right-column">
																	<h1 class="t" data-aos="fade-left" >Populer Post</h1>
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
							</div>
			</section>
<!-- Section SIte3 -->
			<section class="sect3">
								<div class="title4" data-aos="fade-down" >
												<h3><span class="vl4"></span>OTHER BLOGS</h3>
									</div>
									</div>
										<div class="contain2">
														<?php
																		include "connect1.php";

																		

																		$jumlahDataPerhalaman = 3;
																		$halamanAktif = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
																		$mulaiData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

																		$name = "SELECT * FROM post ORDER BY id DESC LIMIT $mulaiData, $jumlahDataPerhalaman";
																		$hasil = mysqli_query($koneksi, $name);

																		$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

																		foreach($data as $row) {
																		?>
																		<a class="card-body"  href="blog2.php?id=<?= $row['id']?>">
																					<div class="card-img-body">
																								<img data-aos="fade-right" src="./assets/<?= $row['media']?>">
																					</div>
																					<div class="card-info" data-aos="fade-right">
																								<?= $row['title']?>
																					</div>
																					<div class="card-date" data-aos="fade-right" >
																								<?= $row['date']?>
																					</div>
																		</a>
														<?php
														}if(empty($data)){
														?>
														<div class="card-img-body">
																				<img  src="./assets/default.jpg">
																	</div>
																	<div class="card-info" data-aos="fade-right">
																				Insert Your title Here
																	</div>
																	<div class="card-date" data-aos="fade-right" >
																				The date
																	</div>
														<?php
																}
														?>
										</div>
			</section>
			
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
