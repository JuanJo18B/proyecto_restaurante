<?php
    $Chost = 'localhost';
    $Cuser = 'root';
    $Cpass = '';
    $Cdb = 'usuarios_restaurante';

    $con = new mysqli($Chost,$Cuser,$Cpass,$Cdb);

    if ($con->connect_errno){
        die("Ha ocurrido un error");
    }
?>