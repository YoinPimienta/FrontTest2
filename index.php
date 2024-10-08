<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <div class="header-buttons">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <button class="login" id="openModal">Iniciar Sesión</button>
        </div>
    </header>

    <!-- Modal Login -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form">
                <form action="login.php" method="POST">
                    <div class="form_details">Iniciar sesion</div>
                    <input placeholder="correo" class="input" type="text" name="correo">
                    <input placeholder="Password" class="input" type="password" name="clave" >
                    <button class="btn">Iniciar sesion</button>
                    <span class="switch">No tienes una cuenta?
                        <label class="signup_tog" for="signup_toggle">Registrate</label>
                    </span>
                </form>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="banner">
        <img src="./img/img.jpg" alt="Banner de ofertas">
    </div>

    <div class="container">
        <nav id="sidebar" class="hidden">
            <ul>
                <li>
                    <div class="cl-toggle-switch">
                        <label class="cl-switch">
                            <input type="checkbox" id="themeToggle">
                            <span></span>
                        </label>
                        Cambiar Tema
                    </div>
                </li>
                <li><a href="#">Configuración</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Biblioteca</a></li>
                <li><a href="#">Nuestras Metas</a></li>
                <li><a href="#">Quienes somos</a></li>
            </ul>
        </nav>

        <main>
            <h1>Bienvenido a Nuestra Página</h1>
            <p>Explora nuestro contenido y descubre más sobre nosotros.</p>
            <button class="register">Registrate</button>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>
