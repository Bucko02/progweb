<?php   
	///ACTIVAR EL MANEJO DE VARIABLES DE SESION 


          
   $usu="";
   $pwd="";
   //un arreglo que reciba el resultado del método del servicio web
   $datos;
   //VERIFICA QUE TENGAN INFORMACIÓN
   if( !empty($_POST['txtUsuario']) && !empty($_POST['txtContrasena']))
   {	   
        $usu = htmlspecialchars($_POST['txtUsuario']);
		$pwd = htmlspecialchars($_POST['txtContrasena']);
        // CONSUMIR EL SERVICIO WEB:
        $cliente = new SoapClient(null, array('uri' => 'http://localhost/','location'=>'http://localhost/Progweb/2doseguimiento/practica%201/servicioweb/servicio.php'));
        $datos = $cliente->sp_Acceso($usu,$pwd);


		 // SALIDA AL CLIENTE DEL DATO RECIBIDO
		if((int)$datos[0]["BAN"]==1){
			///CONFIGURAR LAS VARIABLES DE SESION DE USUARIO
			if(!isset($_SESSION["cveUsuario"]))
				$_SESSION["cveUsuario"]=$datos[1]["CVE"];
			if(!isset($_SESSION["nomUsuario"]))
				$_SESSION["nomUsuario"]=$datos[2]["NOM"];
			if(!isset($_SESSION["usuUsuario"]))
				$_SESSION["usuUsuario"]=$datos[3]["USU"];
			if(!isset($_SESSION["rolUsuario"]))
				$_SESSION["rolUsuario"]=$datos[4]["ROL"];
			//echo $datos[0]["BAN"];
			//echo $datos[1]["CVE"];
			//echo $datos[2]["NOM"];
			echo '<script language="javascript">alert("Bienvenido(a): '.$datos[2]["NOM"].' ('.$datos[4]["ROL"].')");</script>';
			///echo json_encode($datos);
		}else{
			echo '<script language="javascript">alert("ACCESO DENEGADO, VERIFCAR SUS DATOS...");</script>';
		}
   }     
?> 
<html> 
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--se agrega un link para acceder a los archivos compilados y comprimidos de bootstratp-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
	<body>
		<form id="frmAcceso" method="POST">	
		
         <div class="container">      
			<table width="800px" align="center">
			  <tr>
			    <td >
				  <table align="center">
				  <tr rowspan="3">
				      <td colspan="2" align="center"><hr style="color:#102C54"/></td>
				     </tr>
				  <tr rowspan="3">
				   <td colspan="2"  align="center"><h1>Acceso</h1></td>
				  </tr>		
				  	<tr>
					    <td colspan="2"><br /></td>
					</tr>
					<tr >
						<td><br>Usuario
						   </font>						   
						   <br>
						</td>						
						<td>
						   <br><input type="text" name="txtUsuario" class="form-control"  placeholder="Nombre de usuario">
						</td>						
					</tr>

					<tr >
						<td><br>Contraseña
						   </font>						   
						   <br>
						</td>						
						<td>
						   <br><input type="text" name="txtContrasena" class="form-control"  placeholder="Contraseña">
						</td>						
					</tr>

					<tr>
						<td colspan="2" align="center"><br>
						   <input type="submit" value="Aceptar" class="btn btn-primary">
						   <input type="button" value="Cancelar" class="btn btn-primary">
						</td>												
					</tr>					
					<tr rowspan="3">
				      <td colspan="2" align="center"><hr style="color:#102C54"/></td>
				     </tr>
				  </table>
				</td>
				<td>
				</td>
			  </tr>
			</table>
	       </div>   
		</form>
	</body>
</html>