<?php

require_once ("koneksi.php");


// mengeksekusi tampilan data MySql query armada
$query = "SELECT armada FROM `armada`";
$dataArmada = mysqli_query($mysqli, $query);

// menampilkan data array sdh benar atau tdk
// echo var_dump($dataArmada);
// require ("query.php");

?>


<html>

    <head>

         <title>Input Form</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
                    </script>

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

                <link rel="stylesheet" href= "styles.css">

    </head>



<body>

        <!-- header -->
    <nav class = "navbar navbar-expand-lg navbar-light">
            
            <div class="container-fluid">
    
                <!-- navbar brand -->
                <a class = "navbar-brand" href="#">
                    <img src="TA/assets/logo.png" />
                </a>
                
                <!-- navbar toggler -->
                <button class = "navbar-toggler" type="button" data-bs-toggle ="collapse" data-bs-target = "#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class= "navbar-toggler-icon"></span>
                </button>
    
                <!-- navbar collapse -->
                <div class= "collapse navbar-collapse" id= "navbarSupportedContent">
    
                    <ul class= "navbar-nav ms-auto mb-2 mg-lg-0">
                        <li class= "nav-item">
                            <a class= "nav-link" aria-current= "page" href= "#">Daftar Paket</a>
                        </li>
                    </ul>
                </div>    
                
            </div>
            
    </nav>
     
        <div id= "form" class= "pt-5">

            <div class= "container">

                <div class= "row d-flex justify-content-center">
                    <div class= "col colom col-8 p-4 bg-light">
                        
                        <form method = "post" action = "#">

                            <div class = "form-group mb-2">

                                <label for="id_paket">Id Paket</label>
                                <input id= "id_paket" name= "id_paket" class="form-control" type="number" placeholder="Id Paket" required />

                            </div>

                            <div class = "form-group mb-2">

                                <label for="nama_paket">Nama Paket</label>
                                <input id= "nama_paket" name= "nama_paket" class="form-control" type="text" placeholder="Nama Paket" required />
                
                            </div>

                            <div class = "form-group mb-2">

                                <label for="kota_wisata">Kota Wisata</label>
                                <input id= "kota_wisata" name= "kota_wisata" class="form-control" type="text" placeholder="Kota Wisata" required />
                                
                            </div>

                            <div class = "form-group mb-2">

                                <label for="destinasi">Destinasi</label>
                                <textarea class="form-control" id="destinasi" name="destinasi" rows="3"></textarea>

                            </div>

                            <div class = "form-group mb-2">

                                <label for="fasilitas">Fasilitas</label>
                                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3"></textarea>

                            </div>

                            <div class = "form-group mb-2">

                                <label for="armada">Armada</label>
                                <select class="form-control" id="armada" name="armada">
                                    <option value="">--Pilih Jenis Armada--</option>

                                    <?php foreach($dataArmada as $data) { ?>
                                        <!-- cara1 menampilkan data -->
                                    <!-- <option value=""><?=$data['armada'] ?></option> -->

                                        <!-- cara2 menampilkan data -->
                                    <option value=""><?php echo $data['armada'] ?></option>
                                    <?php }?>

                                </select>                                

                            </div>                           

                            <div class = "form-group mb-2">

                                <label for="harga">Harga</label>
                                <input id= "harga" name= "harga" class="form-control" type="number" placeholder="harga" required />

                            </div>


                            <input type= "submit" value= "send" class= "btn btn-primary">
                       

                        </form>
                    </div>
                </div>
            </div>
        </div>





</body>
</html>