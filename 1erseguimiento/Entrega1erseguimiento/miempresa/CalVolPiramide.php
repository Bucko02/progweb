<?php   
          
   $lado="";
   $altura="";
   /// INTEGRANTES: 
   /// DARIO EMMANUEL PEREZ TORRES
   /// RAMIREZ CHICANO OSCAR MANUEL
   /// SANCHEZ JOEL

   //un arreglo que reciba el resultado del método del servicio web
   $datos;
   //VERIFICA QUE TENGAN INFORMACIÓN
   if( !empty($_POST['txtBase'])&& !empty($_POST['txtAltura']))
   {	   
        $lado = htmlspecialchars($_POST['txtBase']);
        $altura = htmlspecialchars($_POST['txtAltura']);
        // CONSUMIR EL SERVICIO WEB:
        $cliente = new SoapClient(null, array('uri' => 'http://localhost/','location'=>'http://localhost/Progweb/1erseguimiento/miempresa/serviciosweb/servicio.php'));
        $datos = $cliente->calcPiramideHex($lado,$altura);

        // SALIDA AL CLIENTE DEL DATO RECIBIDO

        echo "<script>alert('".$datos."');</script>";
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
				   <td colspan="2"  align="center"><h1>Consumir servicio Web</h1></td>
				  </tr>		
				  	<tr>
					    <td colspan="2"><br /></td>
					</tr>
					<tr >
						<td><br>¿Cuál es valor del lado del Hexagono?
						   </font>						   
						   <br>
						</td>						
						<td>
						   <br><input type="text" name="txtBase" class="form-control"  placeholder="Lado del hexagono">
						</td>						
					</tr>
                    <tr >
						<td><br>¿Cuál es la altura?
						   </font>						   
						   <br>
						</td>						
						<td>
						   <br><input type="text" name="txtAltura" class="form-control"  placeholder="Altura de la piramide">
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