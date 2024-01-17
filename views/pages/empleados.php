<?php
$item = null;
$value = null;
$empleados = EmpleadoController::crtShowEmpleados($item, $value);
$objEmpleado = new EmpleadoController();
$cont = 1;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Empleados</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Empleados</a></li>
                    <li class="breadcrumb-item active">Lista Empleados</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista Empleados</h3>
                <div class="card-tools">
                    <button type="submit" class="btn btn-sm btn-default" name="addButton" data-toggle="modal" data-target="#modal-newUser">
                        <span class="fas fa-plus"></span>
                    </button>
                </div>
            </div>
            <?php include('views/pages/modals/new_User.php');
            ?>
            <div class="card-body">
                <table id="example" class="table table-striped table-datatable dt-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Nombre</th>
                            <th>Estacion</th>
                            <th>Ciudad</th>
                            <th>Modificado por</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Tabla de empleados:
                        //var_dump($empleados);
                        foreach ($empleados as $key => $empleado) { ?>
                            <tr>
                                <td><?php echo $cont ?></td>
                                <td><?php echo $empleado["nombre"] ?></td>
                                <td><?php echo $empleado["cargo"] ?></td>
                                <td><?php //echo $objEmpleado->crtShowEmpleadoItem() 
                                    ?></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="hidden" name="idEmpleado" value="<?php echo $empleado['id']; ?>">
                                    <?php if ($empleado['estado'] != 1) { ?>
                                        <button type="submit" class="btn btn-outline-danger btn-xs tablabutton btnActivar" name="activar" idUsuario=<?php $empleado["id"] ?>>
                                            <span class="fas fa-times"></span>
                                        </button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-outline-success btn-xs tablabutton btnActivar" name="desactivar" idUsuario=<?php $empleado["id"] ?>>
                                            <span class="fas fa-check"></span>
                                        </button>
                                    <?php } ?>
                                    <button type="submit" class="btn btn-xs btn-outline-warning tablabutton" name="editButton">
                                        <span class="fas fa-pen"></span>
                                    </button>
                                    <button type="submit" class="btn btn-xs btn-outline-info tablabutton" name="viewEmpleado">
                                        <span class="fas fa-file-alt"></span>
                                    </button>
                                </td>
                            </tr>

                        <?php $cont++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>