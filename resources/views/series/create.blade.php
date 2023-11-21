@extends('layout')

@section('titulo')
    Cadastrar Séries
@endsection

@section('conteudo')
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-primary mt-3">Adicionar</button>
    </form>
@endsection
