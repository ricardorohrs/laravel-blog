@extends('main')

@section('title', '| Contato')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contato</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email:</label>
                     <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Assunto:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Mensagem:</label>
                    <textarea id="message" name="message" placeholder="Escreva sua mensagem aqui..." class="form-control"></textarea>
                </div>

                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
