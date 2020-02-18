<?php
    session_start();
    require '../logica/conexion.php';

    $query = "SELECT idCita,fecha, hora, paciente.nombre as paciente, medico.nombre as medico, nombreConsultorio, estadocita.estado as estado FROM paciente INNER JOIN cita ON paciente.idPaciente = cita.paciente INNER JOIN medico on cita.medico = medico.cedula INNER JOIN 
    consultorio ON cita.consultorio = consultorio.idConsultorio INNER JOIN estadocita on cita.estado = estadocita.idEstado order by idCita";

    $bdconect = mysqli_query($conectar,$query);
    mysqli_set_charset($conectar, 'utf8');
    $mostrar = mysqli_fetch_array($bdconect);

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
                <li><a href=""><i class="fa fa-user"></i></i> Recepcionista </a></li>
                <li><a href="../logica/logout.php"><i class="fa fa-sign-out"></i></i> Cerrar sesión</a></li>
            </ul>
      
        </div>
      
      </nav><!-- end .navbar -->

      <br><br><br>
      <section>
        <div class="box">
          <div class="container-1">
          </div>
          <h1 id="citas"><strong>Citas médicas</strong></h1>
        </div>
      </section>
      
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
              <li class="active"><a href="./calendario.php"><i class="fa fa-calendar fa-fw"></i> Calendario</a></li>
              <li><a href="./registrarCita.php"><i class="fa fa-calendar-plus-o fa-fw"></i> Agendar cita</a></li>
              <li><a href="./modificarCita.php"><i class="fa fa-calendar-check-o fa-fw"></i> Modificar cita</a></li>
              <li><a href="./cancelarCita.php"><i class="fa fa-calendar-times-o fa-fw"></i> Cancelar cita</a></li>
      
            </ul>
      
          </div><!-- end .sidebar -->

         <!--Cuadros de informacion-->
        <div class="col">
          <div class="container" id="container">
            <div class="row" id="div_resultado">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Número de Cita</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora</th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Médico</th>
                  <th scope="col">Consultorio</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($bdconect as $row){?>
                  <tr>
                    <th scope="row"><?php echo $row['idCita']; ?></th>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td><?php echo $row['paciente']; ?></td>
                    <td><?php echo $row['medico']; ?></td>
                    <td><?php echo $row['nombreConsultorio']; ?></td>
                    <td><?php echo $row['estado']; ?></td>
                  </tr>
                </tbody>
                <?php
                }?>
            </table>
            </div> <!--row-->
          </div> <!--container-->
        </div><!--col-->
      </div><!--row-->
    </div><!--container fluid-->
  </body>
</html>                            
                           
