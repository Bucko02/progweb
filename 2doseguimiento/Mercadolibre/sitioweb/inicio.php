<?php
    session_start();
    
    $pagina = isset($_GET['op']) ? strtolower($_GET['op']) : 'acceso';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado libre</title>
    <link rel="stylesheet" href="paginas/estilos/style_pie.css"> <!-- Ruta de la hoja de estilos -->
</head>
<body>
    <?php require_once 'paginas/menu.php'; ?>

    <div class="contenedor">
        <div class="contenido">
            <?php require_once 'paginas/' . $pagina . '.php'; ?>
        </div>

        <footer class="piepag">
            <?php require_once 'paginas/piepag.php'; ?>
        </footer>
    </div>
</body>
</html>
