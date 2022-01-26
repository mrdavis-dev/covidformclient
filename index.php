<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8632e9fdd4.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">

    <!-- google analityc -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K0Y6DN0W4D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-K0Y6DN0W4D');
    </script>
    <!-- adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4118735753673684" crossorigin="anonymous"></script>
    <title>Formulario</title>
</head>

<body style="font-family: 'Mukta', sans-serif;">
    <div class='container mt-5'>
        <div class="text-center">
            <img src="logoeut.png" style="width: 350px;">
            <h2>Centro de salud San Cristobal</h2>
        </div>
        <div class="mt-4">

            <form action="sendinfo.php" method="post">

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Cedula:" name="cedula" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nombre Completo:" name="names" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Telefono:" name="telefono" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Edad:" name="edad" required>
                </div>

                <div class="mb-3">
                    <Label>Tiene alguna alergia o enfermedad:</Label><br>
                    <label class="mt-4" for="chk-Yes">
                        <input type="radio" id="chk-Yes" name="show-div" /> Si
                    </label>
                    <label for="chk-No">
                        <input type="radio" id="chk-No" name="show-div" /> No
                    </label>
                    <input class="form-control form-control-lg" type="text" style="display: none;" placeholder="Describa la alergia o enfermedad" id="showDiv" name="enfe_o_alergia">
                </div>

                <div class="mb-3">
                    <label for="">Fecha de hisopado:</label>
                    <input class="form-control form-control-lg" type="date" placeholder="" name="fecha_hi" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Lugar de hisopado:" name="lugar_hisopado" required>
                </div>

                <div class="mb-3">
                    <label for="" style="color: red;">"Coloque la dirección con detalles específicos. Ejemplo: David, calle j sur octava casa amarilla a la mano derecha"</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Direccion:" name="direccion" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Sintomas:" name="sintomas" required>
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="number" placeholder="Contactos en casa:" name="contactos_en_casa" required>
                </div>

                <div class="mb-4">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="number" placeholder="Positivos en casa:" name="positivos_en_casa" required>
                </div>

                <div class="col-6 mx-auto mt-4 mb-5">
                    <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(function() {
        $("input[name='show-div']").click(function() {
            if ($("#chk-Yes").is(":checked")) {
                $("#showDiv").show();
            } else {
                $("#showDiv").hide();
            }
        });
    });
</script>

</html>