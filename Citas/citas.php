
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialidades / Dentista Leon</title>
    <link rel="icon" href="../iconopagina.png">
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="citas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="cont-horario">
        <p> <span>Horario:</span> Lunes a sabados - 9a.m. - 1p.m. y 4p.m. - 8p.m. <span>Contactanos:</span> +51 966 366
            989</p>
    </div>
    <nav class="nav-bar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="" class="enlace"><img src="../logo.png" alt="" class="logo"></a>
        <ul>
            <li><a href="../Inicio/index.html"><i class="fa-solid fa-house-chimney"></i> Inicio</a></li>
            <li><a href="../Nosotros/nosotros.html"><i class="fa-solid fa-flag"></i> Nosotros</a></li>
            <li><a href="../Especialidades/especialidades.html"><i class="fa-solid fa-star"></i> Especialidades</a></li>
            <li><a class="active" href="../Citas/citas.html"><i class="fa-solid fa-calendar-days"></i> Citas en
                    Linea</a></li>
        </ul>
    </nav>
    <div class="contenedor-citas">
        <div class="cont-form">
            <div class="titulo-cita">
                <h1 id="title">Solicita Una Cita</h1>
                <p class="compl-form">Completa el formulario ¡Gracias!</p>
            </div>
            <form action="../ConexionesPHP/ConexionCita.php" method="post" class="cont-form-cita">
                <input class="inp" type="text" name="nombre" placeholder="Nombres y Apellidos . . .">
                <input class="inp" type="text" name="telef" placeholder="Telefono o Celular">
                <input class="inp" type="email" name="correo" placeholder="Correo Electronico . . .">
                <select class="inp" name="especialidad">
                    <option value="" disabled selected>--Seleciones una especialidad--</option>
                    <option value="Consulta dental">Consulta dental</option>
                    <option value="Profilaxis y destartaje dental">Profilaxis y destartaje dental</option>
                    <option value="Restauraciones con Resina">Restauraciones con Resina</option>
                    <option value="Blanqueamiento dental">Blanqueamiento dental</option>
                    <option value="Tratamiento de Ortodoncia">Tratamiento de Ortodoncia</option>
                    <option value="Extracciones y Cirugias Dentales">Extracciones y Cirugias Dentales</option>
                    <option value="Prótesis fija y Prótesis Removible">Prótesis fija y Prótesis Removible</option>
                    <option value="Endodoncias">Endodoncias</option>
                    <option value="Protesis Totales">Protesis Totales</option>
                    <option value="Rediografias">Rediografias</option>
                    <option value="Exodoncias simples">Exodoncias simples</option>
                </select>
                <div class="fecha-hora">
                    <?php
                        date_default_timezone_set("America/Lima");
                        $fechamin = date('Y-m-d');
                    ?>
                    <input type="date" name="fecha" min="<?= $fechamin ?>" required>
                    <input type="time" name="hora" required>
                </div>            
                <textarea class="coment" name="comentario" placeholder="Dejanos un comentario . . ."></textarea>
                <button class="btn-cita" type="submit"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
            </form>
        </div>
    </div>
    </div>


    <footer class="footer">
        <ul class="social-icon">
            <li class="icon-elem"><a href="https://www.instagram.com/" class="icon"><i
                        class="fa-brands fa-instagram"></i></a></li>
            <li class="icon-elem"><a href="https://web.whatsapp.com/" class="icon"><i
                        class="fa-brands fa-whatsapp"></i></a></li>
            <li class="icon-elem"><a href="https://www.facebook.com/" class="icon"><i
                        class="fa-brands fa-facebook"></i></a></li>
            <li class="icon-elem"><a href="https://www.google.com/intl/es-419/gmail/about/" class="icon"><i
                        class="fa-solid fa-envelope"></i></a></li>
        </ul>
        <ul class="menu">
            <li class="menu-elem"><a href="../Inicio/index.html" class="menu-icon"> Inicio </a></li>
            <li class="menu-elem"><a href="../Nosotros/nosotros.html" class="menu-icon"> Nosotros </a></li>
            <li class="menu-elem"><a href="../Especialidades/especialidades.html" class="menu-icon"> Especialidades </a>
            </li>
            <li class="menu-elem"><a href="citas.php" class="menu-icon"> Citas en Linea </a></li>
        </ul>
        <p class="text">@2024 | Todos los derechos reservados - Clinica Dental Leon</p>
    </footer>
</body>

</html>