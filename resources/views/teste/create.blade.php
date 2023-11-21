@extends('layout')

@section('titulo')
    Teste Cadastrar Séries
@endsection

@section('conteudo')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
        <button class="btn btn-primary mt-3">Adicionar</button>
    </form>
@endsection
