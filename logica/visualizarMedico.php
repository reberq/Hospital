<?php
    require 'conexion.php';

    $resultado="";
    $query="SELECT cedula, nombre, apellidoP, apellidoM, telefono, correo, horaEntrada, horaSalida, nomEspecialidad FROM horario INNER JOIN medico 
    on horario.idHorario = medico.idHorario INNER JOIN especialidad on medico.idEspecialidad = especialidad.idEspecialidad";
    
    if(isset($_POST['medicos']))
    {
        $q = $_POST['medicos'];
        $query="SELECT cedula, nombre, apellidoP, apellidoM, telefono, correo, horaEntrada, horaSalida, nomEspecialidad FROM horario INNER JOIN medico 
        on horario.idHorario = medico.idHorario INNER JOIN especialidad on medico.idEspecialidad = especialidad.idEspecialidad where nombre LIKE '%" .$q. "%'";
    }

    $bdconect = mysqli_query($conectar,$query);
    mysqli_set_charset($conectar, 'utf8');
    if($bdconect->num_rows > 0)
    {
        while($mostrar=mysqli_fetch_array($bdconect))
        {
            echo
            '<div class="col-sm-4 col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">'.$mostrar['nombre'].' '.$mostrar['apellidoP'].' '.$mostrar['apellidoM'].'</h3>
                  </div>
                  <div class="panel-body">
                    <p>
                      <strong>  Cédula: </strong>' .$mostrar['cedula'].'</br>
                      <strong>  Especialidad: </strong>' .$mostrar['nomEspecialidad'].'</br>
                      <strong>  Teléfono: </strong>'.$mostrar['telefono'].'</br>
                      <strong>  Correo: </strong>' .$mostrar['correo'].'</br>
                      <strong>  Horario: </strong>' .$mostrar['horaEntrada'].' - '.$mostrar['horaSalida'].'</br>
                    </p>
                  </div>
                </div> <!-- panel-->
              </div><!--col card-->';
        }
    }
    else
    {
        echo "No se encontraron coincidencias con el criterio de búsqueda.";
    }
?>