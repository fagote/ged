@extends('admin.layouts.app')


@section('title', 'Listagem dos usuários')
@section('content')

<h1>USUÁRIOS</h1>

<a id="button1" href="{{ route('users.create') }}">Adicionar Novo Usuário</a>

<br>

    <!-- <x-alert></x-alert> -->

    @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

  

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
    {{ $users->links() }}
    <br>

    <!--===================================================-->
    <!-- Formulário para upload de arquivo -->
    <!--
    <h2>Upar Arquivo</h2>
    <form action="{{ route('users.upload', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="files">Escolha arquivos:</label>
            <input type="file" id="files" name="files[]" accept=".pdf,.xlsx,.ods" multiple required>
        </div>
        <button id="button1" type="submit">Enviar</button>
    </form>
    -->
    <!--===================================================-->
    
</div>
    

@endsection

<!-- CSS -->

<style>
    /* Estilos gerais aplicados a ambos os temas */
    table {
        width: 100%;
        border-collapse: collapse; /* Garante que as bordas não se sobreponham */
    }

    th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd; /* Borda simples e suave */
    }

    thead, h1, h2, a, x1, #button1, form {
        transition: color 0.3s, background-color 0.3s; /* Transição suave entre temas */
    }

    /* Tema Escuro */
    @media (prefers-color-scheme: dark) {
        th, td, h1, h2, a, form {
            color: white; /* Define a cor do texto como branco */
        }

        thead {
            background-color: #1f2937; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #111827; /* Cor de fundo das linhas da tabela */
        }

        a, #button1 {
            border: 2px solid white; /* Adiciona uma borda branca aos links */
            background-color: transparent; /* Mantém o fundo transparente */
            color: white; /* Garante que a cor do texto seja branca */
        }

        #button1:hover, a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Fundo levemente branco no hover */
            color: white; /* Garante que a cor do texto continue branca */
        }
    }

    /* Tema Claro */
    @media (prefers-color-scheme: light) {
        th, td, h1, h2, a, form {
            color: black; /* Define a cor do texto como preto */
        }

        thead {
            background-color: #f3f4f6; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #e5e7eb; /* Cor de fundo das linhas da tabela */
        }

        a, #button1 {
            border: 2px solid black; /* Adiciona uma borda preta aos links */
            background-color: transparent; /* Mantém o fundo transparente */
            color: black; /* Garante que a cor do texto seja preta */
        }

        #button1:hover, a:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Fundo levemente preto no hover */
            color: black; /* Garante que a cor do texto continue preta */
        }
    }

    #adicionar-usuario {
        animation: pulse 2s infinite; /* Aplica a animação de pulsação */
    }
</style>







