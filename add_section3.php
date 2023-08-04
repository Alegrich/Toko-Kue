<!DOCTYPE html>
<?php
			session_start();
			include "connect1.php";
			if(!isset($_SESSION['login'])){
					 	header('location: login.php');
					 	exit;
			}
			$username = $_SESSION['username'];
																					
			$query = "select * from admin where username = '$username'";
			$hasil = mysqli_query($koneksi, $query);
																					
			$data = mysqli_fetch_assoc($hasil);
?>
<html>

<head>
    <title>Add Section3</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<style>
			@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap');
			.pagination {
					font-family: "Montserrat", sans-serif;
					display: flex;
					list-style: none;
					margin-left: 40rem;
					padding-top: 25px;
				}

				.pagination li {
					margin: 0 5px;
				}

				.pagination a {
					display: inline-block;
					padding: 1px 10px;
					border: 1px solid #ccc;
					border-radius: 20px;
					color: #333;
					text-decoration: none;
				}

				.pagination a.active {
					background-color: #EA7738;
					color: #fff;
				}
		</style>	
<body class="d-flex justify-content-start align-items-center" style="background-color: #FFF0E4;">
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="./assets/logo.png" alt="">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="./assets/<?php print_r($data['profile']);?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php print_r($_SESSION['username']);?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="profile.php">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="login.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="dashboard.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pin-angle-fill"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="all_post.php">
                            <i class="bi bi-circle"></i><span>All Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_post.php">
                            <i class="bi bi-circle"></i><span>Add New Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="category.php">
                            <i class="bi bi-circle"></i><span>Category</span>
                        </a>
                    </li>
                    <li>
                    <li class="nav-item">
														  <a class="nav-link collapsed" data-bs-target="#forms-card" data-bs-toggle="collapse" href="#">
														      <i class="bi bi-pin-angle-fill"></i><span>Card</span><i class="bi bi-chevron-down ms-auto"></i>
														  </a>
														  <ul id="forms-card" class="nav-content collapse " data-bs-parent="#sidebar-card">
														      <li>
														          <a href="add_card.php">
														              <i class="bi bi-circle"></i><span>All card</span>
														          </a>
														      </li>
														  </ul>
										</li>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-pages" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-minus"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-pages" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link collapsed" data-bs-target="#tables-home" data-bs-toggle="collapse" href="#">
								            <i class="bi bi-file-earmark-minus"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
								        </a>
												 <ul id="tables-home" class="nav-content collapse " data-bs-parent="#sidebar-home">
												    			 <a href="add_section1.php">
												                <i class="bi bi-circle"></i><span>Section1</span>
												            </a>
												             <a href="add_section2.php">
												                <i class="bi bi-circle"></i><span>Section2</span>
												            </a>
												            <a href="add_section3.php">
												                <i class="bi bi-circle"></i><span>Section3</span>
												            </a>
												  </ul>
                         <a class="nav-link collapsed" data-bs-target="#tables-about" data-bs-toggle="collapse" href="#">
								            <i class="bi bi-file-earmark-minus"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
								       	 </a>
												 <ul id="tables-about" class="nav-content collapse " data-bs-parent="#sidebar-home">
												    			 <a href="add_about_section1.php">
												                <i class="bi bi-circle"></i><span>Section1</span>
												            </a>
												             <a href="add_about_section2.php">
												                <i class="bi bi-circle"></i><span>Section2</span>
												            </a>
												            <a href="add_about_section3.php">
												                <i class="bi bi-circle"></i><span>Section3</span>
												            </a>
												  </ul>
                        <a class="nav-link collapsed" data-bs-target="#tables-blog" data-bs-toggle="collapse" href="#">
								            <i class="bi bi-file-earmark-minus"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
								       	 </a>
												 <ul id="tables-blog" class="nav-content collapse " data-bs-parent="#sidebar-home">
												    			 <a href="add_blog_section1.php">
												                <i class="bi bi-circle"></i><span>Section1</span>
												            </a>
												  </ul>
                         <a class="nav-link collapsed" data-bs-target="#tables-contact" data-bs-toggle="collapse" href="#">
								            <i class="bi bi-file-earmark-minus"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
								       	 </a>
												 <ul id="tables-contact" class="nav-content collapse " data-bs-parent="#sidebar-home">
												    			 <a href="inbox.php">
												                <i class="bi bi-circle"></i><span>Inbox</span>
												            </a>
												  </ul>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
						
						<li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-user" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="all_user.php">
                            <i class="bi bi-circle"></i><span>All User</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_user.php">
                            <i class="bi bi-circle"></i><span>Add Users</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
						
            <li class="nav-item">
                <a class="nav-link collapsed" href="media.php">
                    <i class="bi bi-columns"></i><span>Media</span> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-heading">Other</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="profile.php">
                    <i class="bi bi-person-circle"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Settings</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main" style="width: 1500px;">

        <div class="pagetitle">
            <h1>Section3</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Section3</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard mt-5">
            <div class="row container">
            				<form method="post" action="add_section3_process.php" class="col-lg-8">
                             <div class="d-flex justify-content-between align-items-start w-100 ms-3">
                                <div class="w-100">
                                    <input class="form form-control fs-4" style="width: 600px;" type="text" placeholder="Add Title Here" name="title" >
                                    <input type="file" class="form-control mt-3" name="foto">
                                    <div class="mt-3">
                                     <div id="container">
																					<textarea id="desc" name="description"></textarea>												
																		</div>
                                </div>
						</div><!-- End add -->
						
											<div class="col-lg-12">
                            <div class="card ms-5 w-100">
                                <div class="card-body">
                                     <div class="form-validation mt-3">
                                        <label for="">Publish</label>
                                        <div class="form-group row mt-2 ms-1">  
                                            <button type="submit" class="btn btn-primary col-lg-6" name="submit"><i class="bi bi-share-fill me-2"></i>Publish</button>
                                        </div>
                                    </div>
                            </div>
            					</div>
										</form>
										
        </section>
        <table class="container mt-4 ms-3">
																			<tr class="row text-center fs-5 shadow py-2 mb-2 rounded-5" style="background-color: #523838; width: 1500px;">
																				<th class="col-2 text-light fs-4">Name</th>
																				<th class="col-3 text-light fs-4">Media</th>
																				<th class="col-3 text-light fs-4">Description</th>
																				<th class="col-4 text-light fs-4">Action</th>
																		</tr>											
																		<?php
																			$jumlahDataPerhalaman = 2;
																			$halamanAktif = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
																			$mulaiData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
																			
																			$query = "select * from sect3 LIMIT $mulaiData, $jumlahDataPerhalaman";
																			$hasil = mysqli_query($koneksi, $query);
																			
																			while($data = mysqli_fetch_assoc($hasil)){
																		?>		
																		<tr class="row text-center py-2 d-flex align-items-center jutisy-content-center mt-1 rounded-5" style="background-color: whitesmoke;">
																				<td class="col-2 fs-5 text-dark"><?= $data['title']?></td>		
																				<td class="col-3 fs-5 text-dark"><?= $data['foto']?></td>
																				<td class="col-3 fs-5 text-dark"><?= $data['description']?></td>
																				<td class="col-4 fs-5 text-dark">
																							<a href="edit_section3.php?id=<?= $data['id'] ?>" class="btn btn-succes btn-sm col-2 fs-4" style="background-color:#523838;"><i class="bi bi-pencil-square text-light"></i></a>
																							<form class="d-inline" action="delete_section3_process.php" method="POST">
																											<input type="hidden" value="<?= $data['id']?>" name="id">
																											<button class="btn btn-danger btn-sm col-2 fs-4"><i class="bi bi-trash3-fill"></i></button>
																							</form>
																				</td>
																		</tr>
																		<?php
																			}
																		?>
											</table>
											<ul class="pagination">
												<?php
													$totalData = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM sect3"));
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
    </main><!-- End #main -->






















































		<script src="../ckeditor.js"></script>
		<script>
						ClassicEditor
							.create( document.querySelector( '#desc' ) )
							.catch( error => {
							console.error( error );
							} );
		</script>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>
