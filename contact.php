<?php
				include "connect1.php";
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
				<title>Contact</title>
				<link href="contact.css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		</head>
		<style>
			<?php
						include "contact.css";
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
									<div style="margin: auto; font-family: 'Poppins'; font-weight: 600; width: 20px;">
												<?php print_r($_SESSION['name']); ?>
									</div>
								</div>
										
					</div>	
			</header>
			
	<!-- Section SIte -->		
			<section class="sect1">
							<div class="contact">
										<div class="contact-body" data-aos="fade-right" >
													<form action="inbox_process.php" method="post">
																<div class="contact-name">
																			<input type="text" placeholder="Your name*" name="name" data-aos="fade-right" value="<?php print_r($_SESSION['name']); ?>" >
																</div>
																<div class="contact-email">
																			<input type="email" placeholder="Email Address" name="email" data-aos="fade-right" value="<?php print_r($_SESSION['email']); ?>" >
																			<input type="text" placeholder="Your massage" name="message" data-aos="fade-right" style="height: 40vh;">
																</div>
																<div class="button" data-aos="fade-right" >
																			<button>Send Now</button>
																</div>
													</form>
										</div>
									<div class="contact-text">
												<h1 data-aos="fade-left">GOT A QUESTION?</h1>
												<h2 data-aos="fade-left">Contact CakeShop</h2>
												<h3 data-aos="fade-left">We're here to help and answer any question you might<br>
		have. Wee look forward to hearing from you.</h3>
												<br>
												<h4 data-aos="fade-left" >Our Contact Information</h4>
												<div class="contact-img">
																<div class="contact-img1" data-aos="fade-left">
																			<img  src="./assets/a.svg" class="img">
																			<h5 data-aos="fade-left" >cakeshop@gmail.com</h5>
																</div>
																<div data-aos="fade-left" class="contact-img1">
																			<img src="./assets/b.svg" class="img">
																			<h5 data-aos="fade-left" >1(500)850-230</h5>
																</div>
																<div class="contact-img1" data-aos="fade-left" >
																			<img src="./assets/c.png" class="img">
																			<h5 data-aos="fade-left">Special Region of Yogyakarta 55584</h5>
																</div>
												</div>
									</div>
							</div>
							
			</section>
			
	<!-- Section SIte2 -->
			
			
			<!-- Section SIte3 -->
			
		
			
			<!-- Section SIte4 -->
			
		
			
			<!-- Section SIte5 -->
			<section class="sect5">
							<h1 data-aos="fade-up" >Our Location</h1>
							<div id="loc" data-aos="fade-up">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.66407570911!2d110.38745193955079!3d-7.718937500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5949af2e5b83%3A0x1aae8f5c6a5a7b3d!2sOllin%20Bakery%20%26%20Cakeshop!5e0!3m2!1sid!2sid!4v1672383321994!5m2!1sid!2sid" width="1236" height="664" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
