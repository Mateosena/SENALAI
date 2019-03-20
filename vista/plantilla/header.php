<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="bienvenido.php"><img style="width:170px; height:50px;"src="../vista/img/senalai.png" alt=""> </a><br>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">


            <?php if($_SESSION['Roles_idRoles'] == 1) { ?>               
                

                <li> <a  href="" >Prestar locker</a></li>
                <li> <a  href="" >Prestar equipos</a></li>

            <?php } ?>


            <?php if($_SESSION['Roles_idRoles'] == 2) { ?>   

            
                
                <li> <a  href="" >Prestar locker</a></li>
                <li> <a  href="" >Prestar equipos</a></li>
                <li> <a  href="" >Prestar auditorios</a></li>
               

              

            <?php } ?>
                
                
            <?php   if ($_SESSION['Roles_idRoles'] == 4) { ?>


                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Elemento<span class="caret"></span></a>
                 <ul class="dropdown-menu">

                <li><a  href="" >Entrada de Elemento</a></li>
                <li><a  href="" >Salida de Elementos</a></li>
                <li><a  href="" >Historia de Elementos</a></li>
                

             </ul>
             </li>

                 
                 <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar usuario<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                 <li> <a  href="registrarUsuario.php" >Agregar usuario</a></li>
                 <li> <a  href="administrarUsuarios.php" >Administar usuarios</a></li>
                

             </ul>
             </li>



             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Prestamos <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                 <li> <a  href="" >Prestamo Elementos</a></li>
                <li><a  href="" >Prestamo Auditorios</a></li>
                


             </ul>
             </li>
             
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                 <li> <a  href="" >Agregar departamento</a></li>
                <li><a  href="" >Agregar ciudad</a></li>
                <li><a  href="" >Agregar tipo de equipo</a></li>


             </ul>
             </li>


              <?php } ?>
                 
             </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                    <i class="glyphicon glyphicon-user"></i>
                    
                        <strong> <?php echo $_SESSION['Nombre'] ?> </strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <img src="../vista/img/logousuario.png" style="width:90px; heigth:90px;" alt="">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php  echo $_SESSION['Nombre']." ".$_SESSION['Apellido_Primero']; ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['Email'] ?> </p>
                                        <p class="text-left">
                                            <a href="actualizarDatos.php" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                        <p class="text-left">
                                            <a href="actualizarContrasena.php" class="btn btn-primary btn-block btn-sm">Cambiar contraseña </a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="../validaciones/cerrarSesion.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
