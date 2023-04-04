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
        @include('adminDashboard')
        <div style="padding:10%;" class="container">
            <div class="row justify-content-center">
                <div class="col md-9mx-auto">
                    <form method="post" action="{{ route('product.importCsv')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="csv_file">Archivo CSV:</label>
                            <input type="file" name="csv_file" class="form-control-file" id="csv_file" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Importar CSV</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
