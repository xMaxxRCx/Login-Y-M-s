<?php
error_reporting(0);
// conexion //
include 'include/connect.php';
if(isset($_POST['Inicia'])){
  $us = $_POST['usuario'];
  $ps = $_POST['pass'];
  // consulta //
  $consul = "SELECT * FROM usuarios WHERE Nombre = '$us' and Password = '$ps'";
  if($resul=$connect->query($consul)){
    while($row = $resul->fetch_array()){
      $usso = $row['Nombre'];
      $passo = $row['Password'];
    }
    $resul->close();

  }
  $connect->close();
  if(isset($us) && isset($ps)){
    if($us == $usso && $ps == $passo){
      $_SESSION['log'] = TRUE;
      $_SESSION['usuario'] = $usuar;
      header("location:escritorio.php");
    }
    else{
      $mensaje.="<div class='alert alert-danger' role='alert'>
      Tus datos no son correctos
    </div>";

    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/flud.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.js"></script>  
    
    <title></title>
</head>
<body>
    <div class="col mt-6">
        <div class="row d-flex justify-content-center">
            <div class="container col-12 p-5 mt-5 ">
          
                <div class="row">
          
                    <div class="container col-6 border shadow p-2" ><br><br>
                        <div class="col">
                            <section class="container">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </section>
                            <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
                            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
                            <script>
                                $(function() {
                                    $(".container span").draggable();
                        
                                });
                            </script>
                            </div>
                    </div>
          
          
                    <!--Formulario-->

                    <div class="container col-6 border shadow p-2">
                        <h1 class="text-center mt-3">Inicios de sesion</h1>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                          
          
                            <label for="N_user" class="form-label mt-4 ms-5">Nombre de Usuario</label>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <input type="text" name="usuario" class="form-control w-75 mx-auto" id="nickname" placeholder="Ingresa tu nombre de usuario" required>
                             
                            <label for="Password" class="form-label mt-4 ms-5">Contraseña</label>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                            <input type="password" name="pass" class="form-control w-75 mx-auto" id="password "placeholder="Ingresa tu contraseña" required><br>
                            
          
                            <div class="form-check form-switch">
                              <input class="form-check-input"  type="checkbox" role="switch" id="ver" onclick="verpass(this);">
                              <label class="form-check-label" for="flexSwitchCheckDefault">Ver Tu Contraseña-</label>
                            </div>
                              
                              <div class="row  col-sm-6 col-md-6 col-lg-6">
                              <a href="recuperar.html" class="href">¿olvidaste tu contraseña?</a><br><br>

                          </div>
                         
                          
                        
          
                        
          
          
                            <div class="input-group">
                                <input type="submit" name="Inicia" value="Entrar" class="btn btn-outline-danger">
                              </div>

                        </form>
                    </div>
                </div>
                <?php echo $mensaje; ?>
            </div>
           </div>
            <script src="js/bootstrap.js"></script>
    </div>
</body>
</html>