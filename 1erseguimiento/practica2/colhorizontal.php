<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Grid+Bootstrap</title>
    <style>
        .row {
            margin-top:40px;
            margin-bottom:40px;
            background:#e8e8e8;
        }
        .columna{
            text-align:center;
            background:#f2f2f2;
            padding: 10px;
            border: 1px solid #4d5061;
        }
    </style>
</head>
<body>

	<div class="row justify-content-start">
		<div class="columna col-4">
	       Columna No.1
	    </div>
        <div class="columna col-4">
	       Columna No.2 
	    </div>
	</div>
    
    <div class="row justify-content-end">
		<div class="columna col-4">
	       Columna No.1
	    </div>
        <div class="columna col-4">
	       Columna No.2 
	    </div>
	</div>

	<div class="row justify-content-center">
		<div class="columna col-4">
	       Columna No.1
	    </div>
        <div class="columna col-4">
	       Columna No.2 
	    </div>
	</div>

    <div class="row justify-content-around">
		<div class="columna col-4">
	       Columna No.1
	    </div>
        <div class="columna col-4">
	       Columna No.2 
	    </div>
	</div>

	<div class="row justify-content-between">
		<div class="columna col-4">
	       Columna No.1
	    </div>
        <div class="columna col-4">
	       Columna No.2 
	    </div>
	</div>

	<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>