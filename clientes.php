<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes</h2>
    <?php
       include('conexion.php');  
       $consulta_cliente = mysqli_query($conexion, "SELECT * FROM pedidos_cliente"); 
       while($listar_datos = mysqli_fetch_assoc($consulta_cliente)) { ?>
    <div class="datos_pedidos">
        <h3>ID pedido: <?php echo $listar_datos['id_pedido'];?></h3>
        <h3>Descripción: <?php echo $listar_datos['producto'];?></h3>
        <h3>Cantidad: <?php echo $listar_datos['cantidad'];?></h3>
        <h3>Precio: <?php echo $listar_datos['precio'];?></h3>
    </div>


    <?php
       }
    ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>