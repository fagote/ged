@extends('admin.layouts.app')


@section('title', 'Listagem dos usuários')
@section('content')

<h1>USUÁRIOS</h1>

<a href="{{ route('users.create') }}">Novo</a>

<br>

    <x-alert></x-alert>
  

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhum usuário no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <br>

    <!-- Formulário para upload de arquivo -->
    <h2>Upar Arquivo</h2>
    <form action="{{ route('users.upload', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="files">Escolha arquivos:</label>
            <input type="file" id="files" name="files[]" accept=".pdf,.xlsx,.ods" multiple required>
        </div>
        <button id="button1" type="submit">Enviar</button>
    </form>
    
</div>
    {{ $users->links() }}

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





