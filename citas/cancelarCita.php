<?php
    session_start();
    require '../logica/conexion.php';

    $paciente = "Paciente";
    $medico = "Medico";
    $consultorio = "Consultorio";

    if(isset($_POST['valor']))
    {
      $valor = $_POST['valor'];
      $query="SELECT fecha, hora, paciente.nombre, medico.nombre, consultorio.nombreConsultorio FROM paciente INNER JOIN cita ON paciente.idPaciente = cita.paciente 
      INNER JOIN medico on cita.medico = medico.cedula INNER JOIN consultorio ON cita.consultorio = consultorio.idConsultorio where idCita =".$valor;
      $bdconect = mysqli_query($conectar,$query);
      mysqli_set_charset($conectar, 'utf8');
      $fila = mysqli_fetch_row($bdconect);
      $paciente = $fila[2];
      $medico = $fila[3];
      $consultorio = $fila[4];
    }
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
        <!--Búsqueda-->
       <br><br>
      <section>
          <div class="container-1">
          <form class="form-wrapper" action='cancelarCita.php' method='POST'>
            <input  id="search" type="search" placeholder="Número de cita"required name="valor" />
            <button  id="submit" type="submit">Buscar</button>
          </form>
          </div>
      </section>
      
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
              <li><a href="./registrarCita.php"><i class="fa fa-calendar-plus-o fa-fw"></i> Agendar cita</a></li>
              <li><a href="./modificarCita.php"><i class="fa fa-calendar-check-o fa-fw"></i> Modificar cita</a></li>
              <li class="active"><a href="./cancelarCita.php"><i class="fa fa-calendar-times-o fa-fw"></i> Cancelar cita</a></li>
      
            </ul>
      
          </div><!-- end .sidebar -->
          
 <!--Cuadros de informacion-->
 <div class="col">
          <div class="container" id="container">
            <div class="row justify-content-md-center" id="div_resultado">
              <div class="col-md-12">
                <div class="well well-sm" id="well2">
                  <form class="form-horizontal" name="form" action="../logica/cancelaCita.php?id=<?php echo $valor?>" method="post">
                    <fieldset>
                      <legend class="text-center header">Cancelar cita</legend>

                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="fecha" name="fecha" type="date" placeholder="Fecha" value="<?php echo $fila[0]?>" class="form-control" required="required" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-8">
                          <input id="hora" name="hora" type="time" placeholder="Hora" value="<?php echo $fila[1]?>" class="form-control" required="required" disabled>
                        </div>
                      </div>

                      <div class="form-group" id="mpc">
                        <div class="col-sm-3">
                          <input id="paciente" name="paciente" type="text" placeholder="Paciente" value="<?php echo $paciente?>" class="form-control" disabled>
                        </div>
                        <div class="col-sm-3">
                          <input id="medico" name="medico" type="text" placeholder="Médico" value="<?php echo $medico?>"  class="form-control" disabled>
                        </div>
                        <div class="col-sm-3">
                          <input id="consultorio" name="consultorio" type="text" placeholder="Consultorio" value="<?php echo $consultorio?>" class="form-control" disabled> 
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" name="cancelar" class="btn btn-primary btn-lg">Cancelar</button>
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



>                            
