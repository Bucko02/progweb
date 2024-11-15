<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Grid+Bootstrap</title>
    <style>
        .row > div{
            text-align:center;
            /*background:#f2f2f2;*/
        }
        .uno{background: #87CEFA}
        .dos{background: #3333ff}
        .tres{background: #3333ff}
        .cuatro{background:#87CEFA}
    </style>
</head>
<body>

	<div class="container">
		
		<div class="row">
		    <div class="col uno">
                <h4>Columna No.1</h4>
		        <p>Aqui va la descripcion de la columna numero 1</p>
		    </div>
            <div class="col dos">
                <h4>Columna No.2</h4>
                <p>Aqui va la descripcion de la columna numero 2</p>
		    </div>
            <div class="w-100"></div>
            <div class="col tres">
                <h4>Columna No.3</h4>
                <p>Aqui va la descripcion de la columna numero 3</p>
		    </div>
            <div class="col cuatro">
                <h4>Columna No.4</h4>
                <p>Aqui va la descripcion de la columna numero 4</p>
		    </div>
		</div>
	</div>

	
	<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>