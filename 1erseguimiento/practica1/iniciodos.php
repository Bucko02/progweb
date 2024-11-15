<!DOCTYPE html>

<html>
<head>
	<title>Mi primera página PHP !</title>
	<meta charset="utf-8">
	<!-- Siempre debe colocarse para que sea adaptable -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container" align="middle">
		<h1>Mi primera página con Bootstrap</h1>
		<img src="imagenes/computerBusiness.jpg" width="200" height="100">
		<br>
		<p>Es una prueba de creación de páginas básicas con Bootstrap</p>
		<button class="btn btn-primary">Botón 1</button>
		<button class="btn btn-secondary">Botón 2</button>
		<button class="btn btn-warning">Botón 3</button>	
        <button class="btn btn-danger">Botón 4</button>	
	

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>

        <label for="basic-url" class="form-label">Your vanity URL</label>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
        </div>
    </div>

    <div class="container" align="middle">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
            <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
            </label>
        </div>
        
        <br>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Default radio
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Default checked radio   
            </label>
        </div>

    </div>
    <script src = "bootstrap/js/jquery-3.5.1-min.js"></script>
    <script src = "bootstrap/js/poppers.min.js"></script>
    <script src = "bootstrap/js/bootstrap.min.js"></script>

</body>
</html>