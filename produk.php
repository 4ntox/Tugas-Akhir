<?php
require_once "koneksi.php";
// mengeksekusi tampilan gambar carousel
$query = "SELECT nama_gambar FROM `gambar`";
$dataGambar = mysqli_query($mysqli1, $query);
$array_gambar = $dataGambar->fetch_assoc();
foreach( $dataGambar as $pict) {                                 
  // echo "gambar" .$pict['nama_gambar'];
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bs5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bs5/dist/css/bootstrap.css">
    
    <!-- icon -->
    <link rel="stylesheet" href="icon/css/all.min.css">
    
    <!-- Bootstrap Js -->
    <!-- <link rel="stylesheet" href="bs5/js/src/button.js"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Produk</title>
  </head>
<body>
   
    <!-- kelas upload gambar -->
   <div id="konten-utama">

       <div class="container">
           <div class="row">
              <div class="col-md-6 mt-5 mx-auto">
                <h3>Gambar Slider Pada Halaman Produk</h3>
                <hr>
                <form action="insert_slide.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" name="slideku" class="form-control-file">                       
                    </div>

                    <div class="form-group py-2">
                        <input class="btn btn-primary" type="submit" name="save" value="send">
                        <input class="btn btn-danger" type="reset" name="cancel" value="clear">
                    </div>
                </form>
              </div>
           </div>            
       </div>

   </div> <!-- akhir id upload gambar -->
    
    <div id="slide-utama">

        <div class="container">
          <div class="row">
              <div class="col-md-6 mx-auto" >
                      <?php foreach( $dataGambar as $pict) { ?>
                          
                            <img src="assets/hasil_upload/<?php echo $pict['nama_gambar']?>" class="d-block w-100" alt="...">
                          
                      <?php } ?>
                  <div id="carouselExampleIndicators" class="carousel slide col-lg-6 offset-lg-3" data-bs-ride="carousel">

                    <div class="carousel-indicators">

                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      
                      <div class="carousel-item active">
                          <img src="assets/slide/1.png" class="d-block w-100" alt="...">
                      </div>

                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    
                  </div>
              </div>
          </div>

        </div>
    </div> <!-- Akhir id slide utama -->





    <!-- <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script> -->

    <script src="bs5/dist/js/bootstrap.js"></script>   
    <script src="bs5/dist/js/bootstrap.min.js"></script>
    <!-- <script src="bs5/js/dist/button.js"></script> -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="bs5/dist/js/bootstrap.bundle.min.js"></script>











</body>
</html>


                      