<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Listagem dos setores')
@section('content')
<h1>SETORES</h1>


<a class="button" href="{{ route('sectors.create') }}">Adicionar Novo Setor</a>

<br>

@if (session('success'))
    <div id="success-message" style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 4000);
    </script>
@endif

@if (session('error'))
    <div id="error-message" style="color: white; background-color: rgb(128, 0, 0); padding: 10px; border-radius: 5px;">
        {{ session('error') }}
    </div>

    <!-- Função para tirar a mensagem de aviso após 4 segundos -->
    <script>
        setTimeout(function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 4000);
    </script>
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
                    <a class="button" href="{{ route('sectors.edit', $sector->id_setor) }}">Edit</a>
                    <a id="button_excluir" href="{{ route('sectors.show', $sector->id_setor) }}">Excluir</a>
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

    thead, h1, h2, form {
        transition: color 0.3s, background-color 0.3s; /* Transição suave entre temas */
    }

    /* Tema Escuro */
    @media (prefers-color-scheme: dark) {
        th, td, h1, h2, form {
            color: white; /* Define a cor do texto como branco */
        }

        thead {
            background-color: #1f2937; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #111827; /* Cor de fundo das linhas da tabela */
        }

    }

    /* Tema Claro */
    @media (prefers-color-scheme: light) {
        th, td, h1, h2, form {
            color: black; /* Define a cor do texto como preto */
        }

        thead {
            background-color: #f3f4f6; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #e5e7eb; /* Cor de fundo das linhas da tabela */
        }

    }

    #button_excluir{
        display: inline-block;
        padding: 5px 10px;
        background-color: #e54646; 
        color: white; 
        text-align: center;
        text-decoration: none;
        border-radius: 5px; 
        border: none; 
        cursor: pointer; 
        font-size: 16px; 
        margin-bottom: 5px; 
    }
    #button_excluir:hover{
        background-color: #bb3c3c;
    }

    .button {
        display: inline-block;
        padding: 5px 10px;
        background-color: #4F46E5; /* Cor de fundo do botão */
        color: white; /* Cor do texto */
        text-align: center;
        text-decoration: none; /* Remove o sublinhado do link */
        border-radius: 5px; /* Bordas arredondadas */
        border: none; /* Remove borda */
        cursor: pointer; /* Mostra o ponteiro do mouse */
        font-size: 16px; /* Tamanho da fonte */
        margin-bottom: 5px; 
    }

    .button:hover {
        background-color: #423cbb; /* Cor ao passar o mouse */
    }
</style>






