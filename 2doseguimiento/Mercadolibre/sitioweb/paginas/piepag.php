<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
	<title>Practica 5</title>
</head>
<body>
    <form style="background-color:#FFE600;">
        <div>
            <center>
                <br>
                <?php
                    if(isset($_SESSION["cveUsuario"]) && isset($_SESSION["nomUsuario"])&& 
                       isset($_SESSION["usuUsuario"]) && isset($_SESSION["rolUsuario"])){
                        echo $_SESSION["nomUsuario"] . '['. $_SESSION["rolUsuario"].']';
                ?>
                        <img src="imagenes/usuario.png" style="width: 30px;height: 30px; border-radius: 15px;">
                        &nbsp;&nbsp;
                        <img src="imagenes/icon_close.gif" style="width: 20px;height: 20px; border-radius: 15px;" onclick="cerrarSesion()">
                <?php
                    }
                ?>
                <br>
                Derechos Reservados del Autor @ITP 2024
                <br><br>
            </center>
        </div>
    </form>
</body>
</html>

<script language="javascript">
    function cerrarSesion(){
        if(confirm("Desea cerrar sesion?")){
            document.location.href="paginas/cerrarSesion.php";
        }
    }
</script>