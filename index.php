<?php
    date_default_timezone_set("America/Tegucigalpa");
    
    require_once "controllers/template.Controller.php";
    require_once "controllers/users.Controller.php";
    require_once "controllers/empleados.Controller.php";
    require_once "controllers/items.Controller.php";
    require_once "models/users.Model.php";
    require_once "models/main.Model.php";
    $template = new ControllerTemplate; 
    $template -> ControllerTemplate();

    
?> 