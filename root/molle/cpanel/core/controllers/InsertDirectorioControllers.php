<?php

if ($_SESSION['nombre'] != '') {

    if ($_POST) {

        require('core/models/class.Acceso.php');
        $acceso = new Acceso();
        $acceso->Registrar_Directorio();
        exit;

        # code...
    } else {
        $template = new Smarty();
        $template->display('public/registro.tpl');
        # code...
    }
} else {

    header('location:?view=index');
}
