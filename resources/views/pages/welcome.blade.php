@extends('main')

@section('title', '| Home')

@section('content')
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
@endsection
