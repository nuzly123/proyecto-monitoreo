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
                $valor = $_POST['userLogin'];
                $respuesta = UserModel::mdlShowUsers($tabla, $item, $valor);

                /* AUTENTICACION */
                if (
                    $respuesta['usuario'] == $_POST['userLogin'] &&
                    $respuesta['contrasena'] == $_POST['passwordLogin']
                ) {
                    $_SESSION['login']="OK";
                    echo '<script>window.location = "dashboard"</script>';
                }else {
                    echo ("<div class='alert alert-danger'> Error al Ingresar al Sistema</div>");
                }
            //}
        }
    }
}
?>