@extends('admin.layouts.app')


@section('title', 'Listagem dos setores')
@section('content')
<h1>SETORES</h1>


<a href="{{ route('sectors.create') }}">Adicionar Novo Setor</a>

<br>

@if (session('success'))
    <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif
  

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sectors as $sector)
            <tr>
                <td>{{$sector->id_sector}}</td>
                <td>{{$sector->name_sector}}</td>
                <td>
                    <a href="{{ route('sectors.edit', $sector->id_sector) }}">Edit</a>
                    <a href="{{ route('sectors.show', $sector->id_sector) }}">Detalhes</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhum setor no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $sectors->links() }}
    <br>

   
    
</div>
    

@endsection

<!-- CSS -->

<style>
    table {
        width: 100%;
        border-collapse: collapse; /* Garante que as bordas não se sobreponham */
    }

    th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd; /* Borda simples e suave */
        color: white; /* Define a cor do texto como branco */
    }

    thead {
        background-color: #1f2937; /* Cor de fundo do cabeçalho da tabela */
    }

    tbody tr {
        background-color: #111827; /* Cor de fundo das linhas da tabela */
    }

    /* Estilo para h1 */
    h1,h2 {
        color: white !important; /* Força a cor do texto como branco */
    }

    /* Estilo para links */
    a,#button1 {
        color: white !important; /* Força a cor do texto dos links como branco */
        margin-right: 10px; /* Margem para links */
        text-decoration: none; /* Remove o sublinhado dos links */
        border: 2px solid white; /* Adiciona uma borda branca aos links */
        padding: 4px 8px; /* Adiciona algum espaçamento interno */
        border-radius: 4px; /* Adiciona bordas arredondadas */
        display: inline-block; /* Garante que o padding e a borda sejam aplicados corretamente */
        transition: background-color 0.3s, color 0.3s; /* Adiciona uma transição suave para hover */
    }

    /* Efeito hover para links */
    #button1:hover, a:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Cor de fundo levemente branca no hover */
        color: white; /* Garante que a cor do texto continue branca */
        text-decoration: underline; /* Sublinha o link ao passar o mouse */
    }

    form{
        color: white
    }


</style>





