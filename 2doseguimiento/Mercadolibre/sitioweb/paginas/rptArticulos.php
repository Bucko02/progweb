<?php
// ------------------------------------------------------------------

if (!isset($_SESSION["cveUsuario"]) && !isset($_SESSION["nomUsuario"]) &&
    !isset($_SESSION["usuUsuario"]) && !isset($_SESSION["rolUsuario"])) {
    echo "<script language='javascript'>alert('Acceso denegado, debe iniciar sesión...');
    document.location.href='?op=acceso'</script>";
}
// -------------------------------------------------------------------

$totalProductos = 0;

// Uso del servicio web
$cliente = new SoapClient(null, array('uri' => 'http://localhost/', 'location' => 'http://localhost/Progweb/2doseguimiento/Mercadolibre/servicioweb/servicio.php'));

// Ejecuta un método del servicio web, pasando sus parámetros
$consulta = $cliente->vw_RptProducto();

$totalProductos = 6; // Para este ejemplo se dejó fijo mostrar por renglón 4 productos
?>

<style>
    body {
        background-color: #E1E8D6; /* Fondo gris claro para toda la página */
    }

    .container {
        margin: 20px auto; /* Espaciado superior e inferior, centrado horizontalmente */
        max-width: 1200px; /* Define un ancho máximo para el contenedor */
        padding: 0 10px; /* Añade espaciado en los lados */
    }

    .product {
        background-color: white; /* Color de fondo del contenedor del producto */
        border: 1px solid #ccc; /* Borde del contenedor */
        border-radius: 5px; /* Bordes redondeados */
        padding: 10px; /* Espaciado interno */
        transition: background-color 0.3s; /* Transición suave para el cambio de color */
        cursor: pointer; /* Cambia el cursor al pasar por encima */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        margin: 10px; /* Espaciado alrededor de los productos */
        flex: 0 1 14%; /* Permite que el producto ocupe espacio proporcional */
        max-width: 14%;
        box-sizing: border-box; /* Incluye padding y borde en el ancho */
    }
    .products-wrapper {
        display: flex; /* Utiliza Flexbox para el layout */
        flex-wrap: wrap; /* Permite que los productos se ajusten a varias filas */
        justify-content: flex-start; /* Espaciado igual entre los productos */
    }


    .product a:hover{
      text-decoration: none;
    }

    .product:hover {
        background-color: #E1E8D6; /* Color de fondo gris claro al pasar el mouse */
        text-decoration: none;
    }

    .btn {
      background-color: #4CAF50; /* Color de fondo del botón */
      color: white; /* Color del texto */
      border: none; /* Sin borde */
      padding: 12px 24px; /* Aumentar espaciado interno */
      text-align: center; /* Centrar texto */
      text-decoration: none; /* Sin subrayado */
      display: inline-block; /* Permitir margen */
      font-size: 18px; /* Aumentar tamaño de la fuente */
      margin: 8px 4px; /* Aumentar espaciado alrededor */
      cursor: pointer; /* Cambia el cursor al pasar por encima */
      border-radius: 5px; /* Bordes redondeados */
      transition: background-color 0.3s, box-shadow 0.3s; /* Transiciones suaves */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    }

    /* Efecto hover para el botón */
    .btn:hover {
        background-color: #E1E8D6; /* Cambia el color al pasar el mouse */
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Sombra más intensa al hacer hover */
    }

    .btn b{
      color: gray; /* Color del texto */
    }

</style>

<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  

<form name="frmProductos" method="POST">
    <div class="container">
        <table>
            <tr>
                <td colspan="5"><h2><b>Artículos disponibles</b></h2></td>
            </tr>
            <tr>
                <td colspan="5" style="text-align:right;">
                    <a href='?op=bienvenida' title='Regresar al inicio' class="btn"><b>Regresar a inicio</b></a>
                    <br><br>
                </td>
            </tr>

            <tr>
                <td colspan="5">
            <div class="products-wrapper"> <!-- Nuevo contenedor para los productos -->
            <?php 
            $i = 0;

            for ($rr = 0; $rr < count($consulta); $rr++) {
                echo "<div class='product'>"; // Contenedor blanco para cada producto
                echo "<a href=\"javascript:window.open('https://web.whatsapp.com/send?phone=527713380230&text=Hola,soy *".$_SESSION['nomUsuario']."* me interesa comprar el producto *".$consulta[$rr]['nombre']."* $".$consulta[$rr]['precio'].", ¿Me puedes apoyar?','popup','width=700px,height=700px')\">";
                echo "<img src='".$consulta[$rr]['foto']."' width='120px' height='100px'/>";               
                echo "<p class='black tituloCardCompra' align='center'><b>".$consulta[$rr]['nombre']."</b> <img src='imagenes/whatsapp.png' width='20px' height='20px' style='vertical-align: middle;' /></p>";
                echo "<p class='gray' align='center'>$".$consulta[$rr]['precio']."</p>";  
                echo "<p class='gray' align='center'>".$consulta[$rr]['descripcion']."</p>";  
                echo "</a>";
                echo "</div>"; // Cierre del contenedor del producto
            } // Fin del ciclo for
            ?>
                    </div> <!-- Cierre del contenedor de productos -->
                </td>
            </tr>
        </table>
    </div>
</form>

</body>
</html>