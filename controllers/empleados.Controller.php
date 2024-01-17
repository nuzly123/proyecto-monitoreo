<?php 
class EmpleadoController{
    public static function crtShowEmpleados($item, $value){
        $table = "empleados";
        $respuesta = MainModel::mdlShowItems($table, $item, $value);
        return $respuesta;
    }

    public static function crtShowEmpleadoItem($campo, $item, $value){
        $table = "empleados";
        $respuesta = MainModel::mdlFindByID($table, $campo, $item, $value);
        return $respuesta;
    }
}
?>