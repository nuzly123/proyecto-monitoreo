<?php

class UserController
{
    static public function ctrLogin()
    {
        if (isset($_POST['userLogin'])) {
            /* VALIDACION DE DATOS INGRESADOS */
            /* if (
                preg_match('/^[a-zA-Z0-9]+$', $_POST['userLogin']) &&
                preg_match('/^[a-zA-Z0-9]+$', $_POST['passwordLogin'])
            ) { */
            $tabla = "usuarios";
            $item = "usuario";
            $value = $_POST['userLogin'];
            $respuesta = MainModel::mdlShowItems($tabla, $item, $value);

            /* AUTENTICACION */
            if (
                $respuesta['usuario'] == $_POST['userLogin'] &&
                $respuesta['contrasena'] == $_POST['passwordLogin']
            ) {
                $_SESSION['login'] = "OK";
                echo '<script>window.location = "dashboard"</script>';
                UserModel::mdlUpdateLastLogIn($respuesta["id"], "usuarios");
            } else {
                echo ("<div class='alert alert-danger'> Error al Ingresar al Sistema</div>");
            }
            //}
        }
    }

    static public function ctrShowUsers($item, $value)
    {
        $table = "usuarios";
        $respuesta = MainModel::mdlShowItems($table, $item, $value);
        return $respuesta;
    }

    static public function crtShowUserName($id){
        $table = "empleados";
        $item = "nombre";
        $item2 = "apellido";
        $colum = "id";
        $respuesta = MainModel::mdlFindByID($table, $item, $colum, $id)." 
        ".MainModel::mdlFindByID($table, $item2, $colum, $id);
        return $respuesta;
    }
}
?>