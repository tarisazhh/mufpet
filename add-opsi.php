<html>
<link rel="stylesheet" href="style.css" />
        <center>
        <head>
        <h1>Tambah Layanan</h1>
        </head>
    <body>
        <form action="" method="post">
            <table class="boxg" width="25%" border="0">
                <tr>
                    <td>Jenis Layanan</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_layanan"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr>
                <?php 
                include "koneksi.php";
                if (isset($_POST['submit'])){
                $layanan = $_POST['jenis_layanan'];
                $harga = $_POST['harga'];
                $insert = "INSERT INTO opsi VALUE('','$layanan','$harga')";
                $result = mysqli_query($host, $insert);
                header("Location:view_opsi.php");
                } ?>
            </table>
        </form>
    </body>
</html>                    