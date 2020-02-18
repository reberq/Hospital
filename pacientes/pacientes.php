<?php
    session_start();
    require '../logica/conexion.php';
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="peticionP.js"></script>
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

    <br><br><br>
      <section>
        <div class="box">
          <div class="container-1">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
          </div>
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Lista de pacientes</strong></h1>
        </div>
      </section>
        
    <div class="container-fluid">
      <div class="row">
        <div class="col sidebar">
          <ul class="nav nav-sidebar">
            <li class="sidebar-header text-center">Médicos</li>
            <li><a href="../medicos.php"><i class="fa fa-user-md fa-fw"></i></i> Visualizar médicos</a></li>

            <li class="sidebar-header text-center">Pacientes</li>
            <li><a href="./registroPacientes.php"><i class="fa fa-user-plus fa-fw"></i> Registrar paciente</a></li>
            <li class="active"><a href="./pacientes.php"><i class="fa fa-users fa-fw"></i> Visualizar pacientes</a></li>

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
            <div class="row" id="div_resultado">
            </div> <!--row-->
          </div> <!--container-->
        </div><!--col-->
      </div><!--row-->
    </div><!--container fluid-->
  </body>
</html>                            
                           
