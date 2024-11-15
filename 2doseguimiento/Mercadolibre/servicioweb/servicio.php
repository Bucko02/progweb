<?php
    ///sSE COLOCA EL NOMBRE DE LA PAGINA QUE CONTIENE LOS METODOS DEL SERVICIO WEB
    include 'clsservicios.php';
    $soap=new SoapServer(null,array('uri'=>'http://localhost/'));
    // SE EJECUTA LA CLASE QUE CONTIENE LOS METODOS
    $soap->setClass('clsServicios');
    // SE EJECUTA LA CLASE
    $soap->handle();
?>