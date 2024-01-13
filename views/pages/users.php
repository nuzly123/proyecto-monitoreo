<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Configuración</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
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
                            <th scope="col">Usuario</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th>Creado por</th>
                            <th>Modificado por</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">Usuario</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th>Creado por</th>
                            <th>Modificado por</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>