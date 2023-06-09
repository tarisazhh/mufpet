<?php
include 'koneksi.php';
session_start();
if ($_SESSION['username'] == '') {
    header("location:login.php");
}
?>
<html>
<link rel="stylesheet" href="home.css" >

<head></head>
<nav class="navigasi">
    <div class="home">Muf-Pet</div>
    <div class="llo">
        <a class="lo" href="logout.php">Log-out</a>
    </div>
</nav>

<body>
    <ul class="pilihan">
        <?php
        if ($_SESSION['status_admin'] == "hidup") {
            echo
                '<li><a class="link-c" href="view_customer.php">User</a></li>
            <li><a class="link-a" href="view_dokter.php">Dokter</a></li>
            <li><a class="link-b" href="view_hewan.php">Hewan</a></li>
            <li><a class="link-i" href="view_transaksi.php">Transaksi</a></li>
            <li><a class="link-j" href="view_petfeed.php">Toko Petfeed</a></li>
            <li><a class="link-k" href="view_grooming.php">Toko Grooming</a></li>
            <li><a class="link-d" href="view_opsi.php">Opsi</a></li>';
        } else{
            echo'
            <li><a class="link-b" href="view_dokter.php">Dokter</a></li>
            <li><a class="link-c" href="view_hewan.php">Hewan</a></li>
            <li><a class="link-d" href="view_transaksi.php">Transaksi</a></li>
            <li><a class="link-h" href="view_petfeed.php">Toko Petfeed</a></li>
            <li><a class="link-e" href="view_grooming.php">Toko Grooming</a></li>
            <li><a class="link-a" href="view_opsi.php">Opsi</a></li>';

        }
        ?>
    </ul>
        <table border="0" width="30%" class="profile">
            <tr>
                <td>Username : <?php echo $_SESSION['username']; ?></td>
            </tr>
            <tr>
                <td>Password : <?php echo $_SESSION['password'];?></td>
            </tr>
        </table>
</body>
</div>
</html>