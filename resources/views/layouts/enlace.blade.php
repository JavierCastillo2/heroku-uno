<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light" >
        <form class="container-fluid justify-content-start">
            <a href="index"><button class="btn btn-outline-primary me-2" type="button">Inicio</button></a>
            <a href="about"><button class="btn btn-sm btn-outline-secondary" type="button">Acerca de</button></a>
            <a href="contact"><button class="btn btn-sm btn-outline-secondary" type="button">Contactenos</button></a>
        </form>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background: rgb(58, 121, 204)">
                <ul class="list-group list-group-flush" >
                    <br>
                    <li class="list-group-item list-group-item-primary">Sere el Inicio?</li>
                    <li class="list-group-item list-group-item-primary">Sere el Acerca de?</li>
                    <li class="list-group-item list-group-item-primary">Sere el Contactenos?</li>
                    <li class="list-group-item list-group-item-primary">No sabes quien soy</li>
                    <li class="list-group-item list-group-item-primary">Lee el titulo en el contenido</li>
                    <br>
                </ul>
            </div>
            <div class="col-md-10" style="background: rgb(235, 233, 233)">
                @yield('enlaces')
            </div>
        </div>
    </div>
    <footer class="bg-dark">
        <div class="container-fluid" style="color: white">
            <p>&copy; Javier Castillo Oficial.inc</p>
        </div>
    </footer>
</body>
</html>
