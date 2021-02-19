<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Laravel Blog!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contato</a>
                </li>
            </ul>
            <ui class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Minha Conta
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </ui>
        </div>
    </div>
</nav>

<!-- Option 1: Bootstrap Bundle with Popper -->
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-light">
            <h1 class="display-">Bem vindo ao blog!</h1>
            <hr class="my-4">
            <p>Obrigado por nos visitar. Esse é um teste de laravel! Veja o nosso post mais popular.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular post!</a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Titulo</h3>
                <p>aisudhai sdiasuhd iasuidhasiuda diasdyiasudas iduashdiasd aisudyasiudasd iausdyasi</p>
                <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
            <hr>
            <div class="post">
                <h3>Titulo</h3>
                <p>aisudhai sdiasuhd iasuidhasiuda diasdyiasudas iduashdiasd aisudyasiudasd iausdyasi</p>
                <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
            <hr>
            <div class="post">
                <h3>Titulo</h3>
                <p>aisudhai sdiasuhd iasuidhasiuda diasdyiasudas iduashdiasd aisudyasiudasd iausdyasi</p>
                <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
            <hr>
            <div class="post">
                <h3>Titulo</h3>
                <p>aisudhai sdiasuhd iasuidhasiuda diasdyiasudas iduashdiasd aisudyasiudasd iausdyasi</p>
                <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Menu lateral</h2>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

</body>
</html>
