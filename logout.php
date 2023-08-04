<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>

<body>
    <?php
    session_start(); // Mulai session

    if(isset($_SESSION['username'])) {
        // Jika user sudah login, maka hapus session dan redirect ke halaman login
        session_destroy(); // Hapus semua session
        header("location: login.php"); // Redirect ke halaman login
    }
?>

    <!-- Tampilkan pesan berhasil logout di halaman -->
    <h3>Anda telah berhasil logout. Terima kasih!</h3>
    <button><a href="login.php">Login</a></button>

</body>

</html>
