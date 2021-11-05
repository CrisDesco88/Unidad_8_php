<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Programador web con PHP y MySQL</h1>
            </div>
        </header>
        <section id="contacto">
            <h2>Contáctenos</h2>
            <div class="form">
                <form action="enviar_consulta.php" method="post">
                    <label for="name">
                        <input type="text" name="nombre" placeholder="Nombre" maxlength="50" required>
                    </label>
                    <label for="surname">
                        <input type="text" name="apellido" placeholder="Apellido" maxlength="75" required>
                    </label>
                    <label for="age">
                        <input type="text" name="edad" placeholder="Edad" maxlength="20" required>  
                    </label>
                    <label for="mail">
                        <input type="email" name="email" placeholder="Correo Electrónico" maxlength="50" required>
                    </label>
                    <label for="motiv">
                        <input type="text" name="motivo" placeholder="Motivo de la consulta" maxlength="200" required>
                    </label>
                    <textarea name="mensaje" id="mensaje" placeholder="Escriba la consulta" cols="30" rows="10" maxlength="500" required></textarea>
                    <button type="submit">Envíe su mensaje</button>
                </form>
                <?php
                if(isset($_GET['ok'])) {
                    echo "<p class = 'succes'> Registro exitoso!!!</p>";
                }
                ?>
            </div>
        </section>

        <footer>
            Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
    </section>
</body>

</html>