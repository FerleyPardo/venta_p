<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <!-- Agrega enlaces a los archivos CSS de Bootstrap y jQuery (asegúrate de tener acceso a internet o cargar estos archivos localmente) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="logo" href="assets/img/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo_2.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  
  <style>
    body {
      background-image: url('/assets/img/registro.jpg'); /* Ruta de tu imagen de fondo */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .container {
      margin-top: 100px;
    }
    
    .register-box {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <div class="register-box">
          <h2 class="text-center">Registro</h2>
          <!-- Agrega tus campos de registro aquí (por ejemplo, nombre, correo electrónico, contraseña, etc.) -->
          <form>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
          <p class="mt-3">¿Ya tienes una cuenta? <a href="/iniciar.php">Iniciar Sesión</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
