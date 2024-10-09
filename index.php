<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magia de la inclusión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/commons.css">
</head>

<body id="inicio">
    <div class="mnuMainWrap">
        <div class="mnuMain">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#biblioteca">Biblioteca</a></li>
                <li><a href="#metas">Nuestras Metas</a></li>
                <li><a href="#quienes">Quienes somos</a></li>
            </ul>
        </div>
    </div>

    <div class="sliderMainWrap">
        <div class="sliderItem">
            <div class="sliderItemContent">
                <h1>Magia de la inclusión</h1>
                <p>Descubre un mundo de posibilidades</p>
                <a class="register" id="openModal">Registrate</a>
            </div>
            <img src="./img/1.jpg" alt="Foto inclusión" class="imgItem">
        </div>
        <div class="sliderItem">
            <img src="./img/2.jpg" alt="Foto inclusión" class="imgItem">
            <div class="sliderItemContent">
                <h1>El conocimiento es poder</h1>
                <p>Siempre puedes saber más</p>
                <a class="register" id="openModal">Conoce más</a>
            </div>
        </div>
        <div class="sliderItem">
            <img src="./img/3.jpg" alt="Foto inclusión" class="imgItem">
            <div class="sliderItemContent">
                <h1>Siempre puedes dar amor</h1>
                <p>Comparte amor a todos los que te rodean</p>
                <a class="register" id="openModal">Lee más aquí</a>
            </div>
        </div>
        <div class="sliderItem">
            <img src="./img/4.jpg" alt="Foto inclusión" class="imgItem">
            <div class="sliderItemContent">
                <h1>Profesores y padres</h1>
                <p>Encuentra mas información sobre la Neurodivergencia aquí</p>
                <a class="register" id="openModal">Mira aquí</a>
            </div>
        </div>
    </div>

    <!-- <div class="header-buttons">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <button class="login" id="openModal">Iniciar Sesión</button>
        </div> -->

    <h1>Magia de la inclusión</h1>

    <!-- Modal Login -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form">
                <form action="login.php" method="POST">
                    <div class="form_details">Iniciar sesion</div>
                    <input placeholder="correo" class="input" type="text" name="correo">
                    <input placeholder="Password" class="input" type="password" name="clave">
                    <button class="btn">Iniciar sesion</button>
                    <span class="switch">No tienes una cuenta?
                        <label class="signup_tog" for="signup_toggle">Registrate</label>
                    </span>
                </form>
            </div>
        </div>
    </div>

    <!-- Banner Section
    <div class="banner">
        <img src="./img/img.jpg" alt="Banner de ofertas">
    </div> -->

    <!-- <div class="container">
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
    </div> -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./js/custom.js"></script>
    <!-- <script src="./js/script.js"></script> -->
</body>

</html>