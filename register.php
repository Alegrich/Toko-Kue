<?php
		include "connect1.php";
?>
<html>
			<head>
						<title>Tugas ustadz</title>
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
   					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			</head>
			<style>
						@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap');
						*{
							font-family: 'Montserrat', sans-serif;
							font-weight: 400;
							margin: 0;
							padding: 0;
							box-sizing: border-box;
						}
						body{
							height: 100vh;
							display: flex;
							align-items: center;
							justify-content: center;
							background: #FFF0E4;
						}
						.login{
							width: 660px;
							height: auto;
							padding: 20px;
							border-radius: 12px;
							background: white;
						}
						.login h1{
							font-size: 36px;
							margin-bottom: 25px;
						}
						.login form{
							font-size: 20px;
						}
						.login form .form-group{
							margin-bottom: 12px;						
						}
						.create{
							display: flex;
							align-items: center;
							justify-content: center;
						}
						.create a{
								margin-left: 10px;
								margin-bottom: -15px;
						}
			</style>
			<body>
						<div class="login">
						
										<h1 class="text-center mt-5">Register Here</h1>
									
										<form  action="register_process.php" method="post">
													
													<div class="form-group">
															<label class="form-label">Name</label>
															<input class="form-control" name="name" type="text" required>
															<div class="invalid-feedback">Please Enter your Fullname</div>
													</div>
													
													<div class="form-group">
															<label class="form-label">Email</label>
															<input class="form-control" name="email" type="email" required>
															<div class="invalid-feedback">Please Enter your email address</div>
													</div>
									
												<div class="form-group">
																<label class="form-label">Password</label>
																<input class="form-control" type="password" name="password" required>
																<div class="invalid-feedback">Please Enter your Password</div>
												</div>
												<div class="form-group">
																<label class="form-label">Profile</label>
																<input class="form-control" type="file" name="profile" required>
																<div class="invalid-feedback">Please Set Your Profile</div>
												</div>
												<div class="create mt-5">
																<h6 class="mt-4">Have an account?</h6><a class="fs-6" href="login.php">Login Here !</a>
												</div>
												<button class= "btn btn w-100 mt-5 mb-3" href="login.php" style="background-color: #523838; color: #FFF0E4; ">Register</button>
										
										</form>
						</div>
			</body>
</html>
