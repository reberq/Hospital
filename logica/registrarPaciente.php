<?php
    session_start();
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $estatura = $_POST['estatura'];
    $peso = $_POST['peso'];
    $tipoSangre = $_POST['sangre'];
    $telefono = $_POST['telefono'];

    $cliente = new SoapClient("http://rebeca:8080/WSPaciente/WSGestionPacientes?WSDL");
    try {
        $parametros = array("nombre" => $nombre, "apellidoP"=>$apellidoP, "apellidoM"=>$apellidoM, "sexo"=>$sexo, "edad"=>$edad, "estatura"=>$estatura, "peso"=>$peso, "tipoSangre"=>$tipoSangre, "telefono"=>$telefono);
        $respuestaRegistro = $cliente->__call("Registrar", array("parameters" => $parametros));
        if($respuestaRegistro->return !=0)
        {?>
                <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Title</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
            </head>
            <body>
            <script type="text/javascript">
            $(document).ready(function() {
            swal({
                title: "¡Exito!",
                text: "Registro exitoso",
                type: "success",
            }).then(function(){
                window.location = "../pacientes/pacientes.php";
            });
            });                 
            </script>
            </body>
            </html>  
        <?php
            
        }
        else
        {
            echo "No se pudo completar el registro";
        }
    } catch (SoapFault$fault) {
        echo "Error: ", $fault->faultcode, ", string: ", $fault->faultstring;
    }
?>