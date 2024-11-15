<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Mi Empresa</title>
    <style>
        .fondo{
            background-image: url(imagenes/fondo1.jpg), url(imagenes/fondo2.jpg);
            background-size: 50% 450px, 50% 450px;
            background-position: left, right;
            width: 100%;
            background-repeat: no-repeat ;

        }

        .col{
            text-align: center;
            padding: 10px;
        }

        .central{
            padding: 20px 20px;
            border: 3px solid #ffffff;
        }

        .flechaIzqui{
            background: #35C5CF; /* Color de fondo similar */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 30px; /* Redondeo para el estilo similar */
            position: relative;
            font-weight: bold; 
        }

        .flechaDer{
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 30px; /* Redondeo para el estilo similar */
            position: relative;
            font-weight: bold;
            background: #ff9729;
        }
        .abajo{
            border: 3px solid #ffffff;
            background: rgb(255, 255, 255, .7);
        }
    </style>
</head>
<body>

	<div class="container">
		
		<div class="row justify-content-between">
		    <div class="col col-2">
                <img src="imagenes/logo1.png" width="200px" height="100px">
		    </div>
            <div class= "col d-flex align-items-end col-2">
                <a href="http://20200835darioitpprogweb.rf.gd/progweb/1erseguimiento/miempresa/layoutEmpresa.php"><h4 style="color: black">inicio</h4></a>
            </div>
            <div class= "col d-flex align-items-end col-2">
            <a href="http://20200835darioitpprogweb.rf.gd/progweb/1erseguimiento/miempresa/layoutEmpresa.php"><h4 style="color: black">Buscando Empleo</h4></a>
            </div>
            <div class= "col d-flex align-items-end col-2">
            <a href="http://20200835darioitpprogweb.rf.gd/progweb/1erseguimiento/miempresa/layoutEmpresa.php"><h4 style="color: black">Empleadores</h4></a>
            </div>
            <div class= "col d-flex align-items-end col-2">
            <a href="http://20200835darioitpprogweb.rf.gd/progweb/1erseguimiento/miempresa/layoutEmpresa.php"><h4 style="color: black">Quienes Somos</h4></a>
            </div>
		</div>
	</div>

    <div class="fondo">
		<div class="row" style="height: 150px;">

        </div>
		<div class="row justify-content-center">
		    <div class="central col-6 ">
		        <h3 style="color: white">
                    ¡Posicionamos a cientos de empleados cada mes!
                </h3>
		    </div>
		</div>

        <div class="row justify-content-center">
            <div class= "col col-3">
                <button class="flechaIzqui">
                    ¿Buscas trabajo?
                </button>
            </div>
            <div class="col col-3">
                <button class="flechaDer">
                    ¿Buscas CONTRATAR?
                </button>
            </div>
        </div>

        <div class="row" style="height: 100px;"></div>
        <div class="row justify-content-center">
            <div class="abajo col-8">
            <h2>Estamos aquí para lo que sea que estés buscando.</h2>    
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolor fuga doloremque provident eveniet aspernatur minima vitae odio, 
                voluptatibus numquam. Commodi pariatur iste animi nobis laboriosam? Laborum velit non labore rerum!
            </p>
            <h4>Elaborado por: Ramírez Chicano Oscar Manuel, Perez Torres Dario Emmanuel, Sanchez Joel</h3>
            </div>
        </div>
	</div>

	
	<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>