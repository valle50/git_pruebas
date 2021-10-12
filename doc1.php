<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas2</title>
</head>

<body>
    <h1>Documento de prueba</h1>
    <h6> Pruebas2 </h6>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="" class="clase">
            </div>
            <div class="col-md-3">
                <input type="text" name="" class="clase">
            </div>
            <div class="col-md-3">
                <input type="text" name="" class="clase">
            </div>
            <div class="col-md-3">
                <input type="text" name="" class="clase">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('.clase').keyup(function() {
                alert("hola");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            console.log("hola");
        });
    </script>
</body>

</html>