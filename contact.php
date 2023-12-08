<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us</title>
    <!-- css -->
    <style>
      body {background: linear-gradient(to right, blue , white ,blue);}
      .contact {background: linear-gradient(to right, blue , white ,blue}
      .navbar-nav {background: linear-gradient(to right, blue , white ,blue}
      
    </style>
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav text-light">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keranjang.php">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php if(isset($_SESSION["pelanggan"])): ?>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="riwayat.php">Riwayat Belanja</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar.php">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <?php endif; ?>

                <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>
            </ul>

            <form action="pencarian.php" method="get" class="form-inline ml-auto my-2 my-lg-0">
                <input class="form-control" type="search"  aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0 bg-light text-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
  <section id=" contact bg-dark">
        <div class=" container  ">
            <div class=" row ">
              <div class=" col-sm-12 text-center ">
                <h2>Contact</h2>
                <hr>
              </div>
            </div>
      
            <div  id="contact"class=" row justify-content-center  ">
              <div class=" col-sm-8 col-sm-offset-2 ">
                <form>
                  <div class=" form-group ">
                    <label for=" nama ">Nama</label>
                    <input type=" text " id=" nama " class=" form-control " placeholder=" masukkan nama ">
                  </div>
                  <div class=" form-group ">
                    <label for=" email ">Email</label>
                    <input type=" email " id=" email " class=" form-control " placeholder=" masukkan email ">
                  </div>
                  <div class=" form-group ">
                    <label for=" telp ">No Telepon</label>
                    <input type=" tel " id=" telp " class=" form-control " placeholder=" masukkan no telepon ">
                  </div>
                  <select class=" form-control ">
                    <option>-- Pilih Kategori --</option>
                    <option>keluhan</option>
                    <option>saran & kritik</option>
                  </select>
                  <div class=" form-group ">
                    <label for=" pesan ">Pesan</label>
                    <textarea class=" form-control " rows=" 10 " placeholder=" masukkan pesan "></textarea>
                  </div>
                  <button type=" submit " class=" btn btn-light ">Kirim Pesan</button>
                </form>
              </div>
            </div>
          </div>
                  
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>