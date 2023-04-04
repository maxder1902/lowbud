<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>
<body>

    @include('navbar')
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-9mx-auto">
                <form method="POST" action="{{route('user.register')}}">
                  @csrf
                    <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="nombre">
                  </div>
                  <div class="form-group">
                    <label for="user_id">ID de Usuario:</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" aria-describedby="user_id" placeholder="id">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="password2">Repita la contraseña:</label>
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Repita la contraseña">
                  </div>
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
            </div>
          </div>
</body>
</html>