@extends('admin.layouts.app')


@section('title', 'Permissões')
@section('content')
<h1>Permissões</h1>


<a id="button1" href="{{ route('permissions.create') }}">Adicionar Permissões</a>

<br>

@if (session('success'))
    <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif
  

    <table>
        <thead>
            <tr>
                <th>ID_Usuário</th>
                <th>ID_Empresa</th>
                <th>ID_Setor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($permissions as $permission)
            <tr>
                <td>{{$permission->id_usuario}}</td>
                <td>{{$permission->id_empresa}}</td>
                <td>{{$permission->id_setor}}</td>
                <td>
                    <a id="button1" href="{{ route('permissions.edit', $permission->id) }}">Edit</a>
                    <a id="button1" href="{{ route('permissions.show', $permission->id) }}">Detalhes</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhuma permissão no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $permissions->links() }}
    <br>

   
    
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
        th, td, h1, h2, form {
            color: white; 
        }

        a {
            color: white !important;
        }

        thead {
            background-color: #1f2937; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #111827; /* Cor de fundo das linhas da tabela */
        }

        #button1 {
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

        #button1 {
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





