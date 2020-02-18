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
                <li><a href="logica/logout.php"><i class="fa fa-sign-out"></i></i> Cerrar sesión</a></li>
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
              <li><a href="../pacientes/registroPacientes.php"><i class="fa fa-user-plus fa-fw"></i> Registrar paciente</a></li>
              <li><a href="../pacientes/pacientes.php"><i class="fa fa-users fa-fw"></i> Visualizar pacientes</a></li>
      
              <li class="sidebar-header text-center">Citas</li>
              <li><a href="./calendario.php"><i class="fa fa-calendar fa-fw"></i> Calendario</a></li>
              <li class="active"><a href="./registrarCita.php"><i class="fa fa-calendar-plus-o fa-fw"></i> Agendar cita</a></li>
              <li><a href="./modificarCita.php"><i class="fa fa-calendar-check-o fa-fw"></i> Modificar cita</a></li>
              <li><a href="./cancelarCita.php"><i class="fa fa-calendar-times-o fa-fw"></i> Cancelar cita</a></li>
      
            </ul>
      
          </div><!-- end .sidebar -->
          
        <!--Cuadros de informacion-->
        <div class="col">
          <div class="container" id="container">
            <div class="row justify-content-md-center" id="div_resultado">
              <div class="col-md-12">
                <div class="well well-sm" id="well1">
                  <form class="form-horizontal" action="../logica/registraCita.php" method="POST">
                    <fieldset>
                      <legend class="text-center header">Nueva cita</legend>

                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="fecha" name="fecha" type="date" placeholder="Fecha" value="2011-08-19" class="form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="hora" name="hora" type="time" placeholder="Hora" value="13:45:00" class="form-control" required="required">
                        </div>
                      </div>

                      <div class="form-group" id="mpc">
                        <div class="col-sm-3">
                          <input id="paciente" name="paciente" type="text" placeholder="Paciente" class="form-control" required="required">
                        </div>
                        <div class="col-sm-3">
                        <select class="form-control" id="exampleSelect1" name="medico" required="required">
                            <option value="">Médico</option>
                            <option value="1143562431">Rebeca Rubio</option>
                            <option value="1234567891">Israel Rivera</option>
                            <option value="1664412843">Saúl García</option>
                            <option value="1687654324">Sandra Ortega</option>
                            <option value="1765898854">Silvia Quintero</option>
                            <option value="1887654289">Leonardo Amador</option>
                            <option value="1988743121">Rosa Hernández</option>
                            <option value="2145367876">Blanca Torres</option>
                          </select>
                        </div>
                        <div class="col-sm-3">
                        <select class="form-control" id="exampleSelect1" name="consultorio" required="required">
                            <option value="">Consultorio</option>
                            <option value="1">Pediatría</option>
                            <option value="2">MF1</option>
                            <option value="3">MP1</option>
                            <option value="4">Ginecología</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Agendar</button>
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



