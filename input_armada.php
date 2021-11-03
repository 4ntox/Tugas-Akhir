<?php

// konek ke mysql
require_once ("koneksi.php");

// mengeksekusi tampilan data MySql query armada
$query = "SELECT * FROM armada";
$dataArmada = mysqli_query($mysqli, $query);

// panggil query mysql proses simpan armada
// require ("action.php");

?>


<html>

    <head>

         <title>Input Armada</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
                    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
                    </script>

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

                <link rel="stylesheet" href= "styles.css">

    </head>



<body>

<!-- form input armada -->
<div id= "form" class= "pt-5">

    <div class= "container">

        <div class= "row d-flex justify-content-center">
            <div class= "col colom col-8 p-4 bg-light">
                
                <form method = "post" action = "action.php">

                    <div class = "form-group mb-2">

                        <label for="id">Id Armada</label>
                        <input id= "id" name= "id" class="form-control" type="number" placeholder="Id" required />

                    </div>

                    <div class = "form-group mb-2">

                        <label for="nama_armada">Nama Armada</label>
                        <input id= "nama_armada" name= "nama_armada" class="form-control" type="text" placeholder="Nama Armada" required />
        
                    </div>

                    <input type= "submit" value= "save" class= "btn btn-primary">
                    <input class="btn btn-danger" type="reset" name="cancel" value="clear">

                </form>    
            </div>
        </div>
    </div>
</div>

<div class= "row d-flex justify-content-center">

    <div class= "col colom col-8 p-4 bg-light">

        <table class= "table">

                <thead>

                    <tr align="center" bgcolor="#DFE6ER"> 
                       
                        <th scope= "col">id_armada</th>
                        <th scope= "col">nama_armada</th>
                    </tr>

                </thead>

                <tbody>

                    <?php

                        foreach ($dataArmada as $data) {
                            echo    '<tr>
                                    <td>' . $data["id_armada"] . '</td>
                                    <td>' . $data["armada"] . '</td>                                 
                                    </tr>';
                                            
                                    }

                    ?>

                </tbody>

        </table>

    </div>

</div>


</body>
</html>
