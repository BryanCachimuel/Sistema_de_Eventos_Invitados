    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="inicio.php">
          Sistema de Eventos e Invitados
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inicio.php"><i class="fa-solid fa-house-chimney-user"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="eventos.php"><i class="fa-solid fa-calendar-days"></i> Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="listados.php"><i class="fa-solid fa-clipboard-list"></i> Listas de Invitados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="usuarios.php"><i class="fa-solid fa-users"></i> Listas de Usuarios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-tie"></i> <?php echo $_SESSION['usuario']; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../servidor/inicio_sesion/logout.php"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i> Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>