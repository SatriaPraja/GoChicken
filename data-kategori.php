<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoChicken</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmin1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <img src="img/logo.png" class="logoadmin">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="section">
        <div class="container">
            <h3>Data Kategori</h3>
            <div class="box">
                <button type="button" class="btn btn-danger"><a href="tambah-kategori.php">Tambah Kategori</a></button>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							if(mysqli_num_rows($kategori) > 0){
							while($row = mysqli_fetch_array($kategori)){
						?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td>
                                <a href="edit-kategori.php?id=<?php echo $row ['category_id'] ?>">Edit</a> || <a href="
                                proses-hapus.php?idk=<?php echo $row ['category_id'] ?>"onclick="return confirm('Yakin Ingin Hapus ?'
                                )">Hapus</a>
                            </td>
                        </tr>
                        <?php }}else{ ?>
							<tr>
								<td colspan="3">Tidak ada data</td>
							</tr>
						<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <footer>
            <div class="container">
                <small>Copyright &copy; 2021 - GoChicken.</small>
            </div>      
        </footer>
    </div> 

    <!-- FOOTER -->
    
</body>
</html>