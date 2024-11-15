<?php
    session_start();
    $_SESSION = array();

    session_destroy();

    echo "<script language='javascript'> alert('sesion cerrada exitosamente..!'); document.location.href='../inicio.php'; </script>"
?>