<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
  <title></title>
</head>

<body style="font-family: 'Mukta', sans-serif;">
  <?php
  error_reporting(0);
  require_once 'conn.php';

  // $fecha_registro = $_POST['fecha_registro'];
  $cedula = $_POST["cedula"];
  $names = $_POST["names"];
  $telefono = $_POST["telefono"];
  $edad = $_POST['edad'];
  $enfe_o_alergia = $_POST["enfe_o_alergia"];
  $fecha_hi = $_POST["fecha_hi"];
  $lugar_hisopado = $_POST["lugar_hisopado"];
  $direccion = $_POST["direccion"];
  $sintomas = $_POST["sintomas"];
  $contactos_en_casa = $_POST["contactos_en_casa"];
  $positivos_en_casa = $_POST["positivos_en_casa"];
  $nota = $_POST["nota"];

  if (empty($_POST['save'])) {
    // code...
    $sql = "INSERT INTO paciente (cedula, names, telefono, edad, enfe_o_alergia, fecha_hi, lugar_hisopado, direccion, sintomas, contactos_en_casa, positivos_en_casa, nota) 
  VALUES ('$cedula','$names','$telefono',$edad,'$enfe_o_alergia','$fecha_hi','$lugar_hisopado','$direccion','$sintomas',$contactos_en_casa,$positivos_en_casa, '$nota')";
    $result = mysqli_query($link, $sql);

    // header("location: ../index.php?enviado");
    echo ("  <script>
    Swal.fire({
      icon: 'success',
      title: 'Exelente',
      text: 'El equipo de trazabilidad estara visitandolos en un tiempo maximo de 48 horas',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'index.php';
      }
    })
  </script>");
  } else {

    echo "    <script>
    Swal.fire({
      icon: 'error',
      title: 'Ups... algo salio mal',
      text: 'Verifique haber llenado todos los datos o contacte por línea telefónica al 775-1934',
    }).then((result) => {
      if (result.isConfirmed) {
        history.go(-1);
      }
    })
  </script>";
  }
  ?>

</body>

</html>