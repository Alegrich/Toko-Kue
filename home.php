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
				<title>Home</title>
				<link href=home.css rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
				
		</head>
		<style>
						<?php include "home.css"; ?>
						
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
			</header>
			
	<!-- Section SIte -->		
			<section class="sect1">
										<div class="product">
										<?php
																				include "connect1.php";

																				$name = 'select * from home';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
										?>
														<div class="product-cake" data-aos="fade-left">
																<img  src="./assets/<?= $data['foto']?>" alt="gambar" width="508px">
										</div>
										<div class="product-desc">
														<h1 data-aos="fade-down" ><?= $data['title']?></h1>
												<p class="FONT" data-aos="fade-left">
												<br>
															<?= $data['description']?>
												</p>
												<div class="butn">
															<a href="#menu" data-aos="fade-right">Order Now</a>
															<a href="contact.html" data-aos="fade-left">Contact Us</a>
												</div>			
										</div>
										</div>
										<?php
												}
										?>
										<div class="cake1">
											<?php
																		include "connect1.php";

																		$name = 'select * from home2';
																		$hasil = mysqli_query($koneksi, $name);

																		$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

																		foreach($data as $row) {
																		?>
													<div class="cake0" data-aos="fade-right">
													<hr>
																<img  data-aos="fade-right" src="./assets/<?= $row['photo']?>">
																<div class="cakein" data-aos="fade-right">
																			<h3 data-aos="fade-right">Favorit Cake</h3>
																			<p data-aos="fade-right" class="2"><?= $row['name']?></p>
																			<h4 data-aos="fade-right" class="3">¥ <?= $row['price']?></h4> 
																</div>
													</div>	
													<?php
														}
														?>
										</div>					
			</section>
			
			<!-- Section SIte2 -->
			<section class="sect2">
									<h2 class="title" data-aos="fade-down">
												<span class="vl"></span><span class="cakeshop">CakeShop</span> Service
									</h2>
									<div class="img">
													<div class="img1" data-aos="fade-right">
																<img data-aos="fade-right" src="./assets/Group 3.png" alt="gambar" width="71px">
																<div data-aos="fade-right" class="heading"><a>STORE PICK-UP</a></div>
																<p data-aos="fade-right" class="font2">
																			Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit.maximus nec erat eu porta.<br>Ut elementum, nulla noneuismod, eros<br>ante faucibus nulla,ut viverra
																</p>
																	<div data-aos="fade-right" class="font3">
												 							<a href="contact.html">Store Location</a>
												 				</div>
													</div>
													
														<div class="img1" data-aos="flip-up">
																<img data-aos="flip-up" src="./assets/Group 4.png" alt="gambar" width="71px">
																<div data-aos="flip-up" class="heading"><a>SHIPPING ALL OVER INDONESIA</a></div>
																<p data-aos="flip-up" class="font2">
																			Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit.maximus nec erat eu porta.<br>Ut elementum, nulla noneuismod, eros<br>ante faucibus nulla,ut viverra
																</p>
																	<div data-aos="flip-up" class="font3">
												 							<a>Order Now</a>
												 				</div>
													</div>
													
														<div class="img1" data-aos="fade-left">
																<img data-aos="fade-left" src="./assets/Group 6.png" alt="gambar" width="71px">
																<div data-aos="fade-left" class="heading"><a>DELIVERY SERVICE</a	></div>
																<p data-aos="fade-left" class="font2">
																			Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit.maximus nec erat eu porta.<br>Ut elementum, nulla noneuismod, eros<br>ante faucibus nulla,ut viverra
																</p>
																	<div data-aos="fade-left" class="font3">
												 							<a>Shipping Info</a>
												 				</div>
													</div>
									</div>
			</section>
				<!-- Section SIte3 -->
			<section class="sect3">
									<h2 data-aos="fade-down" id="menu" class="title2">
												<span class="vl"></span>New Cake Variant
									</h2>
									<div class="contain">
										<?php
																		include "connect1.php";

																		$name = 'select * from product';
																		$hasil = mysqli_query($koneksi, $name);

																		$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

																		foreach($data as $row) {
																		?>
												<div class="card" data-aos="fade-right">
															<div class="card_body">
																		<div class="card_img-body" data-aos="fade-right">
																					<img src="./assets/<?= $row['cakefoto']?>" alt="" class="card_img">
																		</div>
																		<div class="card_info" data-aos="fade-right">
																					<h4 class="card_title" data-aos="fade-right">
																					<?= $row['cakename']?>
																					</h4>
																					<div class="card_desc" data-aos="fade-right">
																								<img src="./assets/Star 6.png">
																								<h4><?= $row['rating']?></h4>
																					</div>
																					<p class="card_price" data-aos="fade-right">
																								¥ <?= $row['price']?>
																					</p>
																		</div>
															</div>
												</div>
															<?php
																}
															?>
									<div>
			</section>
			
				<!-- Section SIte4 -->
				<section class="sect4">
				<?php
																				include "connect1.php";

																				$name = 'select * from sect3';
																				$hasil = mysqli_query($koneksi, $name);

																				$data = mysqli_fetch_assoc($hasil);
																				if($data !=null){
										?>
							<div class="part">
											<img data-aos="fade-left" src="./assets/<?= $data['foto']?>">
							</div>				
							<div class="part2" >
											<h4 data-aos="fade-right"><?= $data['title']?></h4>
											<h5 data-aos="fade-right" ><?= $data['description']?></h5>
											<button data-aos="fade-right" class="butn1">
																<a>Order Now</a>		
											</button>			
							</div>
							<?php
									}
								?>				
							</div>
				</section>
				
				<!-- Section SIte5 -->	
				<section class="sect5">
									<div class="title4">
												<h3 data-aos="fade-left"><span class="vl4"></span>Our Blogs</h3>
												<h4 data-aos="fade-right"><a href="blog.php">See more</a></h4>
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
																				<img data-aos="fade-right" src="./assets/default.jpg">
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
