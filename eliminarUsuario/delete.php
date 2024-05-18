<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

 

    <?php
    include "../logica/conexion.php";
    $registro=$_POST['id'];

    $consulta="DELETE FROM usuarios WHERE id = ".$registro;


    mysqli_query($conexion,$consulta);
    ?>
        <div class="container w-75 bg-dark mt-5 rounded shadow">
            <div class="row">
                <form action="eliminar.html" method="post" class="row g-4 mt-4">
                    <div class="my-5">
                        <h1 style="text-align: center; color: white;">¡El registro fue eliminado correctamente</h1>             
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Regresar</button>
                    </div>
                </form>
            </div>
        </div>
</head>
<body class="fondo2">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
