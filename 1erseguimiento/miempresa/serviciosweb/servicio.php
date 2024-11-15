<?php
    /// INTEGRANTES: 
   /// DARIO EMMANUEL PEREZ TORRES
   /// RAMIREZ CHICANO OSCAR MANUEL
   /// SANCHEZ JOEL
    ///sSE COLOCA EL NOMBRE DE LA PAGINA QUE CONTIENE LOS METODOS DEL SERVICIO WEB
    include 'clsservicio.php';
    $soap=new SoapServer(null,array('uri'=>'http://localhost/'));
    // SE EJECUTA LA CLASE QUE CONTIENE LOS METODOS
    $soap->setClass('clsservicios');
    // SE EJECUTA LA CLASE
    $soap->handle();
?>