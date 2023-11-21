@extends('layout')

@section('titulo')
    Listagem de Séries
@endsection

@section('conteudo')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome da Série</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($series as $serie) :  ?>
            <tr>
                <td><?= $serie ?></td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
@endsection
