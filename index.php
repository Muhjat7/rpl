<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokoku</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    
</head>

<body>

    <?php include 'templates/navbar.php'; ?>

    <!-- konten   -->
    <section class="content">
        <div class="container">
            <h1>Produk Terbaru <a href='https://www.instagram.com/mhjatt_103/' title='Toko Laptop' target='_blank'>Toko
                    buku</a>
            </h1>
            <div class="lokasi row justify-content-end fs-5 text-end fw-bold">
                <div class="col-md-4">
                    <h4> <i class="bi bi-geo-alt text-danger"></i>Metland Cibitung, Jl. Metland Cibitung, Wanajaya, Kec. Cibitung, Kabupaten Bekasi, Jawa Barat 17530
                    </h4>
                </div>
            </div>
            <div class="row">

                <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
                        <div class="caption">
                            <h3><?= $perproduk['nama_produk']; ?></h3>
                            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
                            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
                            <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-default">detail</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<!-- footer -->
<footer class=" bg-dark text-center text-white  ">
        <h4>contact Me<i class=" bi bi-heart-fill text-danger "></i> <a
                href="https://www.instagram.com/mhjatt_103/"
                class=" text-white fw-bold "></a> <br></h4>
<div class="container bg-dark text-white">
                <div class="row ">
                    
                    <br><br>
                    <div id="lokasi" class="col-md-4 mb-3">
                        <div class="title-type-5" style="font-family:verdana; fw-bold"> <h2>METLAND CIBITUNG</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.069139702311!2d107.107581!3d-6.2546217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8369e5a9fc2067e8!2sMetland%20Cibitung!5e0!3m2!1sid!2sid!4v1664937872061!5m2!1sid!2sid" style="border: 0; width: 100%; height: 220px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
                     
                    </div><div class="col-md-3 fw-bold text-light">
                        <div class="footer-heading ">
                            <ul>
                                <li><a href="https://maps.app.goo.gl/emEzeeGYXYaWhNLw6" style="font-family:verdana;   ">Jl. Metland Cibitung, Wanajaya, Kec. Cibitung, Kabupaten Bekasi, Jawa Barat 17520</a></li>
                                <!-- <li><a href="#" style="font-family:verdana; font-size: 100%;">Gedung Generali Tower Gran Rubina Business Park</a></li>
                                <li><a href="#" style="font-family:verdana; font-size: 100%;">Lt.22 Unit B, Jl. Epicentrum Utara Raya Kuningan</a></li> -->
                                <img src="https://www.metlandcibitung.co.id/images/urs/urs.jpg">
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-heading">
                            <ul>
                                <li><a href="#" style="font-family:verdana;">Telp: (021) 28087777</a></li>
                                <li><a href="#" style="font-family:verdana; ;">Fax: (62-21) 2808 5555</a></li>
                                <li><a href="#" style="font-family:verdana; ">Call Center: 0807-1-260000 </a></li>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>