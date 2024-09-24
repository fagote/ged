@extends('admin.layouts.app')


@section('title', 'Listagem dos setores')
@section('content')
<h1>SETORES</h1>


<a id="button1" href="{{ route('sectors.create') }}">Adicionar Novo Setor</a>

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
                <td>{{$sector->id_setor}}</td>
                <td>{{$sector->name_setor}}</td>
                <td>
                    <a id="button1" href="{{ route('sectors.edit', $sector->id_setor) }}">Edit</a>
                    <a id="button1" href="{{ route('sectors.show', $sector->id_setor) }}">Detalhes</a>
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

    thead, h1, h2, a, form, #button1 {
        transition: color 0.3s, background-color 0.3s; /* Transição suave entre temas */
    }

    /* Tema Escuro */
    @media (prefers-color-scheme: dark) {
        th, td, h1, h2, a, form, #button1 {
            color: white; /* Define a cor do texto como branco */
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
            color: white !important; /* Garante que a cor do texto seja branca */
        }

        a:hover, #button1:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Fundo levemente branco no hover */
            color: white !important; /* Garante que a cor do texto continue branca */
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
            color: black !important; /* Garante que a cor do texto seja preta */
        }

        a:hover, #button1:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Fundo levemente preto no hover */
            color: black !important; /* Garante que a cor do texto continue preta */
        }
    }
</style>






