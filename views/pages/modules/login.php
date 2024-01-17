    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Aero</b>Sosa</a>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="input-group mb-3">
                        <?php //echo display_mssg($msg) 
                        ?>
                        <input type="text" name="userLogin" class="form-control" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="passwordLogin" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <?php
                    $login = new UserController(); 
                    $login->ctrLogin();
                    ?>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
<!-- 
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#mensaje").fadeOut(1500);
            }, 3000);
        });
    </script> -->