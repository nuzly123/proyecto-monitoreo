<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Empleados</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Empleados</a></li>
                        <li class="breadcrumb-item active">Nuevo Empleado</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Nuevo Empleado</h5>
                    <form action="?modulo=sql_empleados" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11">ID</span>
                                                </div>
                                                <input type="text" class="form-control" name="txtID" placeholder="Identidad" required aria-label="Username" aria-describedby="basic-addon11" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Nombre y Apellido</span>
                                                </div>
                                                <input type="text" name="txtNombre" placeholder="Nombre" required aria-label="First name" class="form-control" />
                                                <input type="text" name="txtApellido" placeholder="Apellido" required aria-label="Last name" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <label for="nuevo-empleado">Fecha de Nacimiento</label>
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <input class="form-control" type="date" id="date-input" name="birthDate" required />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11">Teléfono</span>
                                                </div>
                                                <input type="text" class="form-control" name="txtTelefono" required placeholder="Teléfono" aria-describedby="basic-addon11" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11">Correo</span>
                                                </div>
                                                <input type="text" class="form-control" name="txtCorreo" required placeholder="Correo" aria-describedby="basic-addon11" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12 mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Dirección</label>
                                            <textarea class="form-control" name="txtDireccion" id="txtDireccion" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-3">
                                            <label for="selectContrato" class="form-label">Tipo Contrato</label>
                                            <?php
                                            //echo llena_select("contratos", "selectContrato", "tipo", 0, "id", "true", "true");
                                            ?>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="txtCargo" class="form-label">Cargo</label>
                                                <input type="text" class="form-control" required name="txtCargo" placeholder="Cargo" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="selectDep" class="form-label">Departamento</label>
                                            <?php
                                            //echo llena_select("departamentos", "selectDep", "departamento", 0, "id", "true", "true");
                                            ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="selectEstacion" class="form-label">Estación</label>
                                            <?php
                                            //echo llena_select("estaciones", "selectEstacion", "estacion", 0, "id", "true", "true");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-md-3 mb-3">
                                            <label class="form-label">Fecha Ingreso</label>
                                            <input class="form-control" type="date" required id="html5-date-input" name="fechaIngreso" />

                                        </div>
                                        <div class="col-md-3">
                                            <label for="selectEstacion" class="form-label">Ciudad</label>
                                            <?php
                                            //echo llena_select("ciudades", "selectCiudad", "ciudad", 0, "id", "true", "true");
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12" align="right">
                                        <button type="submit" class="btn btn-success" name="nuevoEmpleado">Guardar</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>