<?php
   /// INTEGRANTES: 
   /// DARIO EMMANUEL PEREZ TORRES
   /// RAMIREZ CHICANO OSCAR MANUEL
   /// SANCHEZ JOEL
///Nombre de la clase
class clsservicios{
    /// programacion de metodos
    public function calcPiramideHex($lado,$altura){
        // se retorna un mensaje construido desde 
        // el servicio web
        $res = ((1/3)*((3*sqrt(3))/2)*($lado*$lado))*$altura;
        return "El resultado es:  ".$res;
    }
}
?>