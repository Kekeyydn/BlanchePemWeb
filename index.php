<?php 
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop - Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php require "navbar.php"; ?>
    
    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
    <div class="container text-center text-white">
            <h1>BLANCHÉ Fashion & Style</h1>
            <h3>Mau Cari Apa Hari Ini?</h3>
            <div class="col-md-8 offset-md-2">
            <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Recipient's username" 
                        aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Browse</button>
                    </div>
                </form>   
            </div>
        </div>
    </div>
    
    <!-- highlighted kategori -->
    <div class="container-fluid font py-5">
        <div class="container text-center">
            <h3>Paling Laris</h3>

            <div class="row mt-5">
                <div class="col-md-3 mb-3">
                    <div class="highlighted-kategori kategori-pakaian-pria d-flex justify-content-center align-items-center" style="height: 250px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Pakaian pria">Pakaian Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="highlighted-kategori kategori-pakaian-wanita d-flex justify-content-center align-items-center" style="height: 250px; ">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Pakaian wanita">Pakaian Wanita</a></h4>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="highlighted-kategori kategori-alaskaki-pria d-flex justify-content-center align-items-center" style="height: 250px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Alas Kaki Pria">Alas Kaki Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="highlighted-kategori kategori-alaskaki-wanita d-flex justify-content-center align-items-center" style="height: 250px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Alas Kaki Wanita">Alas Kaki Wanita</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
    <div class="container-fluid warna2 font py-5 text-white" style="margin-bottom: 30px;">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">
            Selamat datang di Blanchè, tempat di mana kenyamanan dan kesederhanaan bertemu. Kami menawarkan koleksi pakaian yang elegan dan timeless, dirancang dengan perhatian terhadap detail dan kenyamanan. Di Blanche, kami percaya bahwa setiap orang berhak tampil memukau dengan pakaian berkualitas tinggi. Temukan gaya Anda bersama kami. Selamat berbelanja!
            </p>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid font py-5">
    <div class="container text-center">
        <h3>Produk</h3>

        <div class="row mt-5 font">
            <?php while($data = mysqli_fetch_array($queryProduk)){?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto'];?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama'];?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']?></p>
                            <p class="card-text text-harga"> Rp <?php echo $data['harga']?></p> 
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
            <a class="btn btn-outline-warning mt-3" href="produk.php" >See More</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php";?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>