<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Videoclub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @if( true || Auth::check() )
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                            <a class="nav-link" href="{{url('/catalog')}}">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                                Catálogo
                            </a>
                        </li>
                        <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                            <a class="nav-link" href="{{url('/catalog/create')}}">
                                <span>&#10010</span> Nueva película
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item">
                            <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </nav>

    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
                    <h5 class="text-uppercase">Videoclub</h5>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    


    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .fixed-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="fixed-footer">
        © 2024 Videoclub. Todos los derechos reservados.
    </div>
</body>
</html>


