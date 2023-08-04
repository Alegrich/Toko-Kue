<div class="contain3">
												<div class="left-column">
															<div class="contain-3">
																		<h1 data-aos="fade-down" >Blogs</h1>
																		<h4 data-aos="fade-right">Home > Blog </h4>
																		<?php
																				include "connect1.php";

																				$name = 'select * from post';
																				$hasil = mysqli_query($koneksi, $name);

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
																				<a href="#" data-aos="fade-right" ><i class="fa-brands fa-square-instagram fa-3x" ></i>					
																				<a href="#" data-aos="fade-right" ><i class="fa-brands fa-square-facebook fa-3x"></i></a>
																				<a href="#" data-aos="fade-right" ><i class="fa-brands fa-square-twitter fa-3x"></i></a>
																		</div>
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
