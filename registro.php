<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Eventos e Invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="publico/css/inicio_sesion.css">
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
                                <h3 class="login-heading mb-4">Registro de Usuarios</h3>
                                
                                <form action="servidor/registro/registrar.php" method="POST" autocomplete="off">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required autofocus>
                                        <label for="usuario">Usuario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                                        <label for="correo">Correo</label>
                                    </div>


                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                        <label for="password">Contraseña</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" placeholder="Contraseña" required>
                                        <label for="confirmar_password">Contraseña</label>
                                    </div>

                                    <div class="d-grid mb-2">
                                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                                    </div>

                                    <a class="d-block text-center mt-2 small" href="inicio_sesion.php">Si ya te registraste inicia sesión</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
