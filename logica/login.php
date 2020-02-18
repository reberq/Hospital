<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cliente = new SoapClient("http://rebeca:8080/WSPaciente/WSGestionPacientes?WSDL");
    try {
        $parametros = array("usuario" => $username, "password"=> $password);
        $p = $cliente->__call("validar", array("parameters" => $parametros));

        if($p->return !=0)
        {
            header("Location: ../medicos.php");
        }
        else
        {
            ?>

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
    title: "¡ERROR!",
    text: "Usuario o contraseña incorrectos",
    type: "error",
  }).then(function(){
    window.location = "../index.html";
  });
 });                 
</script>
</body>
</html>

<?php
        }
    } catch (SoapFault$fault) {
        echo "Error: ", $fault->faultcode, ", string: ", $fault->faultstring;
    }
?>