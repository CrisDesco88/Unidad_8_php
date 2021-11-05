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
            <h2>Catálogo</h2>
            <nav class= "prod-navbar">
                <ul class="prod-list">
                  <li><a class="btn" href="catalogo.php?id=prod1#catalogo">Sillón Capri</a></li>
                  <li><a class="btn" href="catalogo.php?id=prod2#catalogo">Mesa Ipanema</a></li>
                  <li><a class="btn" href="catalogo.php?id=prod3#catalogo">Banco Venecia</a></li>
                </ul>
            </nav>
            <div class= "prod-descr" id="catalogo">
                <?php
                if (isset($_GET['id'])) {
                switch($_GET['id']) {
                    case 'prod1':
                        $imagen = 'sillon1.jpg'; 
                        $titulo = 'Sillón Capri';
                        $caract = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                        $precio = 345.00; 
                        break;
                    case 'prod2':
                        $imagen = 'ipanema.jpg';
                        $titulo = 'Mesa Ipanema';
                        $caract = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
                        $precio = 500.00;
                        break;
                    case 'prod3':
                        $imagen = 'venecia.jpg';
                        $titulo = ' Banco Venecia ';
                        $caract = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms. ';
                        $precio = 450.00;
                        break;
                }
                ?>

                <div class = "galeria" id="prod-img">
                  <img src="./imagenes/<?php echo $imagen;?>" alt="foto producto">
                </div>
                <div class= "prod-chart" id="descripcion">
                  <ul class="prod-list2">
                      <li><h2><?php echo $titulo;?></h2></li>
                      <li><h3>Precio: $ <?php echo $precio;?></h3> </li>
                      <li><h3>Características:<h3></li>
                      <li><p><?php echo $caract;?></p> </li>
                  </ul>
                </div>
            </div>
            <?php } else { ?>
                <h2>Elija una de las ofertas</h2>
                <h3>La mas amplia oferta de productos con excelente calidad y al mejor precio!</h3>
            <?php } ?>    


        </section>

        <footer>
            Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
    </section>
</body>

</html>