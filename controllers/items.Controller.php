<?php
class ItemController
{
    static public function ctrShowUsuarioItem($campo, $item, $value)
    {
        $table = "usuarios";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }

    static public function ctrShowEmpleadoItem($campo, $item, $value)
    {
        $table = "empleados";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }

    static public function ctrShowCiudadItem($campo, $item, $value)
    {
        $table = "ciudades";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }

    static public function ctrShowRolItem($campo, $item, $value)
    {
        $table = "rol";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }

    static public function ctrShowOficinaItem($campo, $item, $value)
    {
        $table = "oficinas";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }
}
