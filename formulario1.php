<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
        function validarFormulario() {
            var email = document.getElementById('email').value;
            var nombre = document.getElementById('nombre').value;
            var apellido = document.getElementById('apellido').value;

            // Validación de campo de nombre
            if (nombre.trim() === "") {
                alert("El campo Nombre es obligatorio.");
                return false;
            }

            // Validación de campo de apellido
            if (apellido.trim() === "") {
                alert("El campo Apellido es obligatorio.");
                return false;
            }

            // Validación de email
            if (email.indexOf('@') === -1) {
                alert("El campo Email debe contener un '@'.");
                return false;
            }

            return true; // Si pasa todas las validaciones, permite el envío
        }
    </script>
</head>
<body>
    <!--Inicio del Formulario-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Formulario de Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <form action="procesar_formulario.php" method="POST" onsubmit="return validarFormulario()">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="pais_residencia">País de Residencia:</label>
                                <select class="form-control" id="pais_residencia" name="pais_residencia" required>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Brasil">Brasil</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin del Formulario-->
</body>
</html>
