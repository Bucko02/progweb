<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Grid+Bootstrap</title>
    <style>
        .row {
            height:150px;
            margin-top:20px;
            background:#e8e8e8;
        }
        .col{
            text-align:center;
            background:#f2f2f2;
            padding: 10px;
            border: 1px solid #4d5061;
        }
    </style>
</head>
<body>

	<div class="container">
		
        <div class="row">
		    <div class="col align-self-start">
		        Columna #1
		    </div>
            <div class="col align-self-center">
		        Columna #2
		    </div>
            <div class="col align-self-end">
		        Columna #3
		    </div>
	    </div>

		<div class="row align-items-start">
		    <div class="col">
		        Columna #1
		    </div>
            <div class="col">
		        Columna #2
		    </div>
            <div class="col">
		        Columna #3
		    </div>
		</div>

        <div class="row align-items-center">
		    <div class="col">
		        Columna #1
		    </div>
            <div class="col">
		        Columna #2
		    </div>
            <div class="col">
		        Columna #3
		    </div>
		</div>

        <div class="row align-items-end">
		    <div class="col">
		        Columna #1
		    </div>
            <div class="col">
		        Columna #2
		    </div>
            <div class="col">
		        Columna #3
		    </div>
		</div>
	</div>

	
	<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>