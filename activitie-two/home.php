<?php 
session_start();
require 'data.php';
$user = $_SESSION['user'];

if(!$user){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex justify-content-center vh-100 align-items-center">
        <div class="card p-4 bg-dark">
 
               <h1 class="text-center text-light">Bienvenidx <?php print $user['name'];?></h1>
            <form action="process-file.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                <h3 class="text-center text-danger"> Cargar archivos</h1>
                <input type="file" class="bg-danger" name="file">
                </div>
    
              <button type="submit" class="btn btn-light text-dark">Cargar Archivo</button>
            </form>
            
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
