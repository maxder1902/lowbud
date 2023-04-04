<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
    <script type="text/javascript">
      function validarFormulario() {
          var identidadUsuario = document.f1.user_id.value;
          var clave = document.f1.password.value;
          
          if (identidadUsuario.length == "" && clave == "") {
              alert("Los campos de Usuario y Contraseña están vacíos.");
              return false;
          }
          
          if (identidadUsuario.length == "") {
              alert("El campo de usuario esta vacio.");
              return false;
          }

          if (clave.length == "") {
              alert("El campo de Contraseña esta vacio.");
              return false;
          }
      }
  </script>
</head>
<body>

    @include('navbar')
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-9mx-auto">
                <form method="POST" action="{{route('user.login')}}">
                  @csrf
                    <div class="form-group">
                    <label for="user ID">User ID</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" aria-describedby="user_id" placeholder="ID">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
            </div>
          </div>
          <center><p style="padding: 10%">¿No tienes cuenta? Creáte una <a href="signup">ahora</a></p></center>
</body>
</html>