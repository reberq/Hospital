<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>VitalHealth</title>
      <link rel="icon" href="../imagenes/logo1.ico">
      <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../estilos/principal.css" media="all" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand"><img src="../imagenes/logow.png"/></a>
        </div><!-- end .navbar-header -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href=""><i class="fa fa-user"></i></i> Recepcionista</a></li>
          <li><a href="../logica/logout.php"><i class="fa fa-sign-out"></i></i> Cerrar sesión</a></li>
        </ul>
      </div>
    </nav><!-- end .navbar -->
        
    <div class="container-fluid">
      <div class="row">
        <div class="col sidebar">
          <ul class="nav nav-sidebar">
            <li class="sidebar-header text-center">Médicos</li>
            <li><a href="../medicos.php"><i class="fa fa-user-md fa-fw"></i></i> Visualizar médicos</a></li>
        
            <li class="sidebar-header text-center">Pacientes</li>
            <li class="active"><a href="./pacientes/registroPacientes.php"><i class="fa fa-user-plus fa-fw"></i> Registrar paciente</a></li>
            <li><a href="./pacientes.php"><i class="fa fa-users fa-fw"></i> Visualizar pacientes</a></li>
        
            <li class="sidebar-header text-center">Citas</li>
            <li><a href="../citas/calendario.php"><i class="fa fa-calendar fa-fw"></i> Calendario</a></li>
            <li><a href="../citas/registrarCita.php"><i class="fa fa-calendar-plus-o fa-fw"></i> Agendar cita</a></li>
            <li><a href="../citas/modificarCita.php"><i class="fa fa-calendar-check-o fa-fw"></i> Modificar cita</a></li>
            <li><a href="../citas/cancelarCita.php"><i class="fa fa-calendar-times-o fa-fw"></i> Cancelar cita</a></li>
          </ul>
        </div><!-- end .sidebar -->
            
          <!--Cuadros de informacion-->
        <div class="col">
          <div class="container" id="container">
            <div class="row justify-content-md-center" id="div_resultado">
              <div class="col-md-12">
                <div class="well well-sm">
                  <form class="form-horizontal" action="../logica/registrarPaciente.php"  method="POST">
                    <fieldset>
                      <legend class="text-center header">Nuevo paciente</legend>

                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="lname" name="apellidoP" type="text" placeholder="Apellido paterno" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="lname" name="apellidoM" type="text" placeholder="Apellido materno" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="phone" name="telefono" type="text" placeholder="Teléfono" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group" id="esp">
                        <div class="col-md-3">
                          <input id="lname" name="estatura" type="text" placeholder="Estatura" class="form-control" required="required" >
                        </div>
                        <div class="col-md-3">
                          <input id="peso" name="peso" type="text" placeholder="Peso" class="form-control" required="required">
                        </div>
                        <div class="col-md-3">
                          <select class="form-control" id="exampleSelect1" name="sangre" required="required" >
                            <option value="">Tipo de sangre</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">O+</option>
                            <option value="6">O-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" id="edads">
                        <div class="col-md-4">
                          <select class="form-control" id="exampleSelect2" name="sexo" required="required">
                            <option value="">Género</option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <input id="edad" name="edad" type="number" placeholder="Edad"  class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                          </div>
                        </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div> <!--row-->
          </div> <!--container-->
        </div><!--col-->
      </div><!--row-->
    </div><!--container fluid-->
  </body>
</html>                        



