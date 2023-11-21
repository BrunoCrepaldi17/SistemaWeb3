@extends('layout')

@section('titulo')
    Teste Listagem de Séries
@endsection

@section('conteudo')

@if(Session:: has("mensagem"))
 <p class="alert alert-success">{{Session ::get("mensagem")}}</p>
@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da Série</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($objetos as $obj) :  ?>
            <tr>
                <td>{{$obj->id }}</td>
                <td>{{$obj->descricao }}</td>
                <td>
                    <form method="delete">
                        @method('delete')
                        <a class="btn btn-danger" 
                        href="/teste/{{$obj->id }}">Del</a>
                    </form>
                </td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
@endsection
