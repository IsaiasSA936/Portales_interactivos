<?php 
include "include/conecta.php";
error_reporting(0);
if(isset($_POST['btningresar'])){
    $UserSistem = "botdeveloper";
    $Passworsistem = "admin506";
    $User =$_POST['usuario'];
    $Pass =$_POST['contra'];
    /* verificar que se reciba ña informacion
    echo "el ususario es: ".$User." y el password es: ".$Pass;
 */
if ($UserSistem == $User and $Passworsistem == $Pass) {
    $alerta.='<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Bienvenido</strong> se bienvenido a la familia BoT :)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else {
    $alerta.='<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oye</strong> Vos quien chota sos? >:(
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}   
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>BoT | Login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="justify-content-center mt2">
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <h1 class="text-center display-6">BoT | <span class="text-dark">Inicio de Sesion</span></h1>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplate="off">
                <div class="row justify-content-center  mt-3 mb-1">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control border-3 rounded-pill border-dark">
                    </div>
                </div>
                <div class="row justify-content-center mt-2 mb-1">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input type="password" name="contra" id="contra" placeholder="Contraseña" class="form-control border-3 rounded-pill border-dark">
                    </div>
                </div>
                <div class="row  mt-2 justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="d-grid gap-2">
                        <input type="submit" value="Ingresar" name="btningresar" id="btningresar" class=" btn btn-outline-dark rounded-pill">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php echo $alerta; ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>