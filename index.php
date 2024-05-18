<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
    <div class="container w-75 mt-5 "style="background-color: #000000;">
        <div class="row">
            <h1 style="color: white;" class="fw-bold text-center pt-5 mb-1">Bienvenido</h1>
            <h2 style="color: white;" class="fw-bold text-center pt-5 mb-1">Favor de llenar los campos</h2>
            <form action="logica/loguear.php" method="post" class="row g-4 mt-4">
                <div class="col-6">
                    <label style="color: white;" for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                    <input type="text" name="nombre_usuario" class="form-control" placeholder="Escribe tu nombre de usuario">
                </div>
                <div class="col-6">
                    <label style="color: white;" for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
                </div>
                <div class="my-3">
                    <span style="color: white;">¿No tienes una cuenta?<a href="./registroUsuario/registroUsuario.php"> Regístrate</a></span>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

