<?php

///include de archivos PHP (CLASES)
require_once "clssqlstock.php";
///Nombre de la clase
class clsServicios{
    /// programacion de metodos
    public function nombre($nom){
        // se retorna un mensaje construido desde 
        // el servicio web
        return "Bienvenido ".$nom.", estás usando en servicio web!";
    }

    public function sp_Acceso($usu, $pwd){

        // Creación de la clase clsSqlStock para obtener los comandos SQL del almacén
        $clssqlstock = new clssqlstock();

        $cmdSql = $clssqlstock->sp_Acceso($usu,$pwd);


        // -------------------------------------------------
        // Variable para recepción de estatus+datos
        $datos=array();
        
        if($conn = mysqli_connect("localhost", "root", "Emmanuel_10", "bd_almacen") ){
            // Ejecución del comando SQL y recibir resultados (recordset)
            $renglon = mysqli_query($conn, $cmdSql);
            
            if (mysqli_num_rows($renglon) > 0) {
                // Ciclo para lectura de registros
                while($resultado = mysqli_fetch_assoc($renglon) ){
                    $datos[0]["BAN"] = $resultado["bandera"];
                    if($datos[0]["BAN"] == "1" ){
                        // El usuario existe en BD, extraer los demás datos
                        $datos[1]["CVE"] = $resultado["cve"];
                        $datos[2]["NOM"] = $resultado["nombre"];
                        $datos[3]["USU"] = $resultado["usuario"];
                        $datos[4]["ROL"] = $resultado["rol"];
                    }
                }
            }
            else 
                $datos[0]["BAN"] = "0";        
            
            // Cerrar conexión
            mysqli_close($conn);
        }
        // Retornar el arreglo formateado y con los datos de resultado
        return $datos;

    }


    ///metodo para consulta de articulos (vw_RptProducto)
    public function vw_RptProducto(){

        // Creación de la clase clsSqlStock para obtener los comandos SQL del almacén
        $clssqlstock = new clssqlstock();

        $cmdSql = $clssqlstock->vw_RptProducto();


        // -------------------------------------------------
        // Variable para recepción deregistro de datos
        $datos=array();
        ///variable para el control de registros del arreglo de salida
        $i=0;

        if($conn = mysqli_connect("localhost", "root", "Emmanuel_10", "bd_almacen") ){
            // Ejecución del comando SQL y recibir resultados (recordset)
            $renglon = mysqli_query($conn, $cmdSql);
            
            if (mysqli_num_rows($renglon) > 0) {
                // Ciclo para lectura de registros
                while($resultado = mysqli_fetch_assoc($renglon) ){
                    $datos[$i]["clave"] = $resultado["clave"];           
                    $datos[$i]["nombre"] = $resultado["nombre"];
                    $datos[$i]["precio"] = $resultado["precio"];
                    $datos[$i]["descripcion"] = $resultado["descripcion"];
                    $datos[$i]["foto"] = $resultado["foto"];
                    $i++;
                }
            }
            else 
                $datos[0]["clave"] = "0";        
            
            // Cerrar conexión
            mysqli_close($conn);
        }
        // Retornar el arreglo formateado y con los datos de resultado
        return $datos;

    }
}
?>