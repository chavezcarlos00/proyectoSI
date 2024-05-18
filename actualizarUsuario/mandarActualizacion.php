<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <title>Actualizado</title>
</head>

<body class="fondo">
  <?php
  include "../logica/conexion.php"; 
  
  $id = $_POST['id']; 
  $nombre_usuario = $_POST['nombre_usuario'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "UPDATE usuarios SET nombre_usuario='$nombre_usuario',telefono='$telefono', email='$email', password='$password' WHERE id='$id'";
  $rta =mysqli_query($conexion,$sql);
  if(!$rta){
  ?>
    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
            <h1 class="fw-bold text-center pt-1 mb-3">Error al Actualizar</h1>
            <form action="actualizar.php" method="post" class="row g-4 mt-4">
                <div class="my-2">
                    <h1 style="text-align: center; color: white;">Al parecer hubo un error al enviar la actualización, por favor, intentelo de nuevo</h1>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Intentar de nuevo</button>
                </div>
            </form>
        </div>
    </div>
  <?php
  }else{
  ?>
    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
            <h1 class="fw-bold text-center pt-1 mb-3">Se actualizo el registro!</h1>
            <form action="actualizar.php" method="post" class="row g-4 mt-4">
                <div class="my-2">
                    <h1 style="text-align: center; color: white;">¡Los nuevos datos se actualizaron de forma correcta¡</h1>
                </div>
                <div class="container w-75 mt-50 text-center"style="background-color: #141C4C;">
                    <span style="color: white;"><a href="../Principal.php">Regresar a las listas</a></span>
                </div>
            </form>
        </div>
    </div>
  <?php
  }
  ?>


  
</body>
</html>
