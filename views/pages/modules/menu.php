 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="dashboard" class="brand-link">
         <img src="views/dist/img/LogoAEROSOSA.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
         <span class="brand-text font-weight-light">Aero<strong>Sosa</strong></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Alexander Pierce</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <nav class="mt-2 sidebar-nav">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="sidebarnav">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="monitoreo" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Monitoreo
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="users" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Usuarios
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="empleados" class="nav-link">
                     <i class="nav-icon fas fa-briefcase"></i>
                         <p>
                             Empleados
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="tripulacion" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Tripulación
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">CONFIGURACIÓN</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>
                             Configuración
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="aeropuertos" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Aeropuertos</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="ciudades" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Ciudades</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="departamentos" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Departamentos</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="estaciones" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Estaciones</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-header">MÁS OPCIONES</li>
                 <li class="nav-item">
                     <a href="perfil" class="nav-link">
                         <i class="nav-icon fas fa-user-circle"></i>
                         <p>
                             Perfil
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="signout" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Cerrar Sesión
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>