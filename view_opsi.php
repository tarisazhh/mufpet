<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
    <head></head>
    <body>
         <a href="home.php" >Back</a>
    <center>
        <h2>Data Opsi</h2>
        <table width="30%" border="1">
            <tr class="c">
                <th>No</th>
                <th>Layanan</th>
                <th>Harga</th>
                <?php
                if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<th>Aksi</th>';
                } ?>
            </tr>
            <?php
            if($_SESSION['status_admin'] == 'hidup'){
                echo '<a href="add-opsi.php">Tambahkan Data</a>';}
            ?>  
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($host,"SELECT * FROM opsi");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr align="center">
                <td><?php echo $data['id_opsi']; ?></td>
                <td><?php echo $data['jenis_opsi']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<td>
                    <a href="edit-opsi.php?update='.$data['id_opsi'].';">Edit</a> | <a href="edit-opsi.php?hapus='.$data['id_opsi'].';">Hapus</a>
                </td>';
                } ?>
             </tr>
             <?php } ?>
        </table>
    </body>
</html>