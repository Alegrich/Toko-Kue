<!DOCTYPE html>
<?php
			session_start();
			include "connect1.php";
			if(!isset($_SESSION['login'])){
					 	header('location: login.php');
					 	exit;
			}
			$id = $_GET['id'];
			
			$query = "select * from cardblog where id = $id";
			$hasil = mysqli_query($koneksi, $query);
			
			$data = mysqli_fetch_assoc($hasil);
			$username = $_SESSION['username'];
																					
			$query = "select * from admin where username = '$username'";
			$hasil = mysqli_query($koneksi, $query);
																					
			$name = mysqli_fetch_assoc($hasil);
?>
<html>

<head>
    <title>Edit Card</title>
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
                        <img src="./assets/<?php print_r($name['profile']);?>" alt="Profile" class="rounded-circle">
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
                            <i class="bi bi-circle"></i><span> Post</span>
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
                </ul>
            </li><!-- End Forms Nav -->

            
             <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-page" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-minus"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-page" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Home</span>
                        </a>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Shop</span>
                        </a>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>About Us</span>
                        </a>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Blog</span>
                        </a>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Create New Category</span>
                        </a>
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
                            <i class="bi bi-circle"></i><span>All Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_user.php">
                            <i class="bi bi-circle"></i><span>Add New Users</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
						
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-columns"></i><span>Media</span> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-heading">Other</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
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
            <h1>All Card</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Card</a></li>
                    <li class="breadcrumb-item active">All Card</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard mt-5">
            <div class="row container">
            				<form method="post" action="edit_card_process.php" class="col-lg-8">
            				
            				<input type="hidden" value="<?= $data['id'] ?>" name="id" />
            				
                             <div class="d-flex justify-content-between align-items-start w-100 ms-3">
                                <div class="w-100">
                                    <input class="form form-control fs-4"  type="text" placeholder="Add Title Here" name="title" value="<?= $data['title']?>" required>
                                    <input type="file" class="form-control mt-3" name="news" value="<?= $data['news']?>">
                                </div>
						</div><!-- End add -->
						
											<div class="col-lg-12">
                            <div class="card ms-3 w-10 mt-5">
                                <div class="card-body">
                                     <div class="form-validation mt-3">
                                        <label for="">Publish</label>
                                        <div class="form-group row mt-2 ms-1">  
                                            <button type="submit" class="btn btn-primary col-lg-6" name="submit"><i class="bi bi-share-fill me-2"></i>Save Changes</button>
                                        </div>
                                    </div>
                            </div>
            					</div>
										</form>
        </section>

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
