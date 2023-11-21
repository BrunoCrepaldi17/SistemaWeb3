@extends('layout')

@section('titulo')
    Listagem de Categorias
@endsection

@section('conteudo')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome da Categoria</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($categoria as $categorias) :  ?>
            <tr>
                <td><?= $categorias ?></td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
@endsection
