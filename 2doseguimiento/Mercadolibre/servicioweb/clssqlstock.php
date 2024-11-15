<?php
    /// Clase para generar el almacen de comandos SQL 
    /// en funciones para metrizadas
    class Clssqlstock{

        // Método para consulta de usuarios
        public function sp_Acceso($usu,$pwd){
            $cmdsql="";


            $cmdsql = $cmdsql . "select  '1'  as bandera, ";
            $cmdsql = $cmdsql ."       u.usu_cve_usuario as cve,";
            $cmdsql = $cmdsql . "       concat(u.usu_nombre, ' ', u.usu_apellido_paterno, ' ', u.usu_apellido_materno) as nombre, ";
            $cmdsql = $cmdsql . "       u.usu_usuario as usuario, ";
            $cmdsql = $cmdsql . "       r.rol_nombre as rol ";
            $cmdsql = $cmdsql . "from    usuario u, rol r ";
            $cmdsql = $cmdsql . "where   u.usu_usuario = '". $usu ."' ";
            $cmdsql = $cmdsql . "and     u.usu_password = '". $pwd ."' ";
            $cmdsql = $cmdsql . "and     u.rol_cve_rol = r.rol_cve_rol; ";

            return $cmdsql;
        }

        // Método para consulta de articulos (vw_RptProducto)
        public function vw_RptProducto(){
            $cmdsql="";
        
        
            $cmdsql = $cmdsql ."select 	p.pro_cve as clave, p.pro_nombre as nombre, ";
            $cmdsql = $cmdsql ."        p.pro_precio as precio, p.pro_descripcion as descripcion, ";
            $cmdsql = $cmdsql ."        p.pro_foto as foto ";
            $cmdsql = $cmdsql ."from 	producto p;";

            return $cmdsql;

        }
    }
?>