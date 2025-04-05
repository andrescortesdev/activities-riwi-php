<?php
session_start();
 ?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

 </head>
 <body class="d-flex justify-content-center">

    <div class="container d-flex justify-content-center align-items-center vh-100">
    
    <div class="text-danger">
        <?php 
         if (isset($_SESSION['error'])) { 
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        } ?>
    </div>
        <div class="card p-4 bg-dark  text-white">
        <form action="proccess-login.php" method="POST">
            <h1 class="text-center mb-4">Iniciar sesion</h1>
        <div class="mb-3">
          <label for="email" name="email" class="form-label">email</label>
          <input type="email" name="email" placeholder="Escribe tu email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" placeholder="Escribe tu contraseña" class="form-control">
          </div>
          <button class="btn btn-danger" type="submit">Iniciar sesion</button>
        </form>
        </div>
    </div>
    
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
 </html>
