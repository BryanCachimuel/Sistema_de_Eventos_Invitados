<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Eventos e Invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="publico/librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="publico/css/inicio_sesion.css">
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>

<body>

    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">

                                <div class="icono text-center">
                                    <a href="/sistema_eventos_invitados/index.php"><i class="fa-solid fa-shop"></i></a>
                                </div>

                                <h3 class="login-heading mb-4 text-center">Inicio de Sesión</h3>
                                <!-- Sign In Form -->
                                <form action="servidor/inicio_sesion/logear.php" method="POST" autocomplete="off">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                                        <label for="usuario">Usuario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Correo" required>
                                        <label for="password">Contraseña</label>
                                        <input class="mt-3" type="checkbox" onclick="verContrasenia()"> Mostrar Contraseña
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-purple btn-login text-uppercase fw-bold mb-2 mt-3" type="submit">Inicio de Sesión</button>
                                        <div class="text-center">
                                            <a class="small" href="registro.php">Registrate Aquí</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="publico/js/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>