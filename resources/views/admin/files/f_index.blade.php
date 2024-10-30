<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Listagem dos Arquivos')
@section('content')


<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    ARQUIVOS 
</h2>


<!--==================================================-->
<!-- Formulário de Busca -->
<div class="busca">
    <form id="form_search" action="{{ route('files.search') }}" method="GET">
        <input id="input_search" type="text" name="search" placeholder="Buscar arquivo pelo código..." value="{{ request('search') }}" required>
        <button id="button_search" type="submit">Buscar</button>
    </form>

    <!-- Mostrando os Usuários Encontrados -->
    @if(request('search') && isset($files) && $files->count())
        <ul>
            @foreach($files as $file)
                <!--<li>{{ $file->codigo }}</li>--> 
            @endforeach
        </ul>
        
    @endif
</div>

<!--==================================================-->

    


<br><br>
<a class="button" href="{{ route('files.create') }}">Adicionar Novo Arquivo</a>
<a href="{{route('arquivosAprovados.index')}}" class="button">Arquivos Aprovados</a>
<a href="{{route('arquivosAtivos.index')}}" class="button">Arquivos Ativos</a>
<a href="{{route('arquivosReprovados.index')}}" class="button">Arquivos Reprovados</a>
<a href="{{route('arquivosInativos.index')}}" class="button">Arquivos Inativos</a>
<a class="button" href="{{route('aguardandoAprovacao.index')}}" >Arquivos Aguardando Aprovação</a>

<br>

    <!-- <x-alert></x-alert> -->

    @if (session('success'))
        <div id="success-message" style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>

        <!-- Função para tirar a mensagem de aviso após 4 segundos -->
        <script>
            setTimeout(function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 4000);
        </script>
    @endif

  

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Versão</th>
                <th>ID User</th>
                <th>ID Empresa</th>
                <th>ID Setor</th>
                <th>ID Macro</th>
                <th>Ativo</th>
                <th>Aprovação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($files as $file)
            <tr>
                <td>{{ $file->codigo }}</td>
                <td>{{ $file->versao }}</td>
                <td>{{ $file->user?->name ?? 'Usuário não definido' }}</td>
                <td>{{ $file->company?->name_empresa ?? 'Empresa não definida' }}</td>
                <td>{{ $file->sector?->name_setor ?? 'Setor não definido' }}</td>
                <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}
                    
                </td> 
                <td>
                        <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                        <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                        <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhum arquivo no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $files->links() }}
    <br>


</div>           

    
    
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

    thead, h1, h2, x1, form {
        transition: color 0.3s, background-color 0.3s; /* Transição suave entre temas */
    }

    /* Tema Escuro */
    @media (prefers-color-scheme: dark) {
        th, td, h1, h2, form {
            color: white !important; /* Define a cor do texto como branco */
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
        font-size: 18px; /* Tamanho da fonte */
        margin-bottom: 5px; 
    }

    .button:hover {
        background-color: #423cbb; /* Cor ao passar o mouse */
    }

    .button_container{
        display: flex;
        gap: 10px;
    }

</style>


<!--==================================================-->
<!-- CSS - CAMPO DE BUSCA -->
<style>
    /* Estilos para centralizar o conteúdo */
    .busca {
        display: flex;
        justify-content: center; /* Centraliza horizontalmente */
       /* align-items: center;  Centraliza verticalmente */
        height: 10vh; /* Usa toda a altura da tela */
    }

    #form_search {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Alinha verticalmente */
            margin: 20px; /* Margem ao redor do formulário */
        }

        #input_search {
            padding: 10px;
            margin-right: 5px; /* Espaço entre o input e o botão */
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px; /* Largura do campo de texto */
            color: black;
        }

        #button_search {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4F46E5;
            color: white;
            cursor: pointer;
        }

    #button_search:hover {
        background-color: #423cbb;
    }
</style>
<!--==================================================-->






