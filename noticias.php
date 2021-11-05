<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <section id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Programador web con PHP y MySQL</h1>
            </div>
        </header>
        <section id="contenido">
            <h2>Noticias</h2>
            <div class="news">
            <?php
            $noticias = array(
                array('imagen' => 'noticia1.jpg', 'titulo' => 'Los Nuggets de Campazzo ganaron gracias a una gran tapa en la última jugada', 'cuerpo' => 'Los Denver Nuggets de Facundo Campazzo consiguieron una agónica victoria ante los Minnesota Timberwolves por 93 a 91 como visitantes este sábado por la noche, alcanzando una marca de cuatro triunfos y dos derrotas en el comienzo de la temporada.'),
                array('imagen' => 'noticia2.jpg', 'titulo' => 'Los niños de Pinochet: Suecia investigará las adopciones irregulares de chicos pobres ofrecidos por la dictadura', 'cuerpo' => 'Un informe publicado en el diario sueco Dagens Nyheter  sobre las adopciones de niños chilenos en Suecia reveló que "en muchos de los casos se trató de adopciones forzadas de niños y niñas pobres" y se llevaron a cabo a través del "uso del poder cívico-militar, que regulaba el cuidado de la infancia e inhabilitaba judicialmente a madres solteras y familias para ejercer el cuidado de sus hijos o hijas”.'),
                array('imagen' => 'noticia3.jpg', 'titulo' => 'G20: Impuesto a las multinacionales', 'cuerpo' => 'Mientras las delegaciones de los miembros del G20 continúan las discusiones para llegar a un acuerdo sobre la lucha común contra el cambio climático, los jefes de Estado y de Gobierno que participan de la cumbre que inició este sábado en Roma alcanzaron un acuerdo para establecer un impuesto mínimo global a las multinacionales y buscan asegurar mecanismos para que el 70 por ciento de la población mundial esté vacunada contra el coronavirus en 2022.'),
                array('imagen' => 'noticia4.jpg', 'titulo' => 'Joe Biden se reunió con el Papa Francisco en el Vaticano', 'cuerpo' => 'El tema ecológico estuvo entre los principales puntos del encuentro en el Vaticano. Biden se reunió también con Draghi y Macrón en la antesala de la cumbre del G20.')
            );
            for($i=0; $i<count($noticias); $i++) {?>

            
                <div class="news-child">
                    <img src="./imagenes/<?php echo $noticias[$i]['imagen'];?>" alt="">
                    <h2><?php echo $noticias[$i]['titulo'];?></h2>
                    <p><?php echo $noticias[$i]['cuerpo'];?></p>
                </div>
            

            <?php
            }
            ?>
            </div>
        </section>

        <footer>
            Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
    </section>
</body>

</html>