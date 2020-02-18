<?php
    require 'conexion.php';

    $resultado="";
    $query="SELECT nombre, apellidoP, apellidoM, IF(sexo='F', 'Femenino', 'Masculino') as sexo, edad, estatura, peso, tipo, 
    telefono FROM paciente INNER JOIN tiposangre ON paciente.tipoSangre = tipoSangre.idTipo";
    
    if(isset($_POST['pacientes']))
    {
        $q = $_POST['pacientes'];
        $query="SELECT nombre, apellidoP, apellidoM, IF(sexo='F', 'Femenino', 'Masculino') as sexo, edad, 
        estatura, peso, tipo, telefono FROM paciente INNER JOIN tiposangre ON paciente.tipoSangre = tipoSangre.idTipo where nombre LIKE '%" .$q. "%'";
    }

    $bdconect = mysqli_query($conectar,$query);
    mysqli_set_charset($conectar, 'utf8');
    if($bdconect->num_rows > 0)
    {
        while($mostrar=mysqli_fetch_array($bdconect))
        {
            echo
            '<div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">'.$mostrar['nombre'].' '.$mostrar['apellidoP'].' '.$mostrar['apellidoM'].'</h3>
                  </div>
                  <div class="panel-body">
                    <p>
                      <strong> Teléfono: </strong>' .$mostrar['telefono'].'</br>
                      <strong> Género: </strong>' .$mostrar['sexo'].'</br>
                      <strong> Edad: </strong>' .$mostrar['edad'].' años </br>
                      <strong> Estatura: </strong>' .$mostrar['estatura'].'m.</br>
                      <strong> Peso: </strong>' .$mostrar['peso'].'kg. </br>
                      <strong> Tipo de sangre: </strong>' .$mostrar['tipo'].'
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