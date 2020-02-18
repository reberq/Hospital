<?php
    session_start();
    $id = $_GET['id'];
    echo $id;

    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $cliente = new SoapClient("http://localhost:63958/WebService1.asmx?WSDL");
    try {
        $parametros = array("sfecha"=>$fecha, "shora"=>$hora, "id"=>$id);
        $respuesta = $cliente->__call("update", array("parameters"=>$parametros));
        
        ?><!DOCTYPE html>
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
            text: "Cita modificada",
            type: "success",
        }).then(function(){
            window.location = "../citas/calendario.php";
        });
        });                 
        </script>
        </body>
        </html>  
<?php
        
    } catch (SoapFault$fault) {
        echo "Error: ", $fault->faultcode, ", string: ", $fault->faultstring;
    }
?>
