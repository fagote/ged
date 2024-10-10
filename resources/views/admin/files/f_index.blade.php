@extends('admin.layouts.app')


@section('title', 'Listagem dos Arquivos')
@section('content')

<h1>Arquivos</h1>


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

    



<a id="button1" href="{{ route('files.create') }}">Adicionar Novo Arquivo</a>

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
                <th>Path</th>
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
            <td>{{ $file->file_path }}</td>
            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
            <td>{{ $file->aprovacao }}</td>
            <td>
                    <a id="button1" href="{{ route('files.edit', $file->id) }}">Edit</a>
                    <a id="button1" href="{{ route('files.show', $file->id) }}">Excluir</a>
                    <a id="button1" href="{{ route('files.view', $file->id) }}" target="_blank">Visualizar</a>
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

    {{-- <h2>Arquivos Enviados:</h2>

@if($files->isEmpty())
    <p>Nenhum arquivo enviado.</p>
@else
    <ul>
        @foreach($files as $file)
            <li>
                @if($file->extension == 'pdf')
                    <!-- Exibir PDFs -->
                    <embed src="{{ asset('storage/' . $file->file_path) }}" type="application/pdf" width="600" height="400">
                @elseif(in_array($file->extension, ['jpg', 'jpeg', 'png', 'gif']))
                    <!-- Exibir imagens -->
                    <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ basename($file->file_path) }}" width="200">
                @else
                    <!-- Para outros arquivos, oferecer download -->
                    <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">
                        {{ basename($file->file_path) }} <!-- Nome do arquivo -->
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
@endif --}}

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

    thead, h1, h2, a, x1, #button1, form {
        transition: color 0.3s, background-color 0.3s; /* Transição suave entre temas */
    }

    /* Tema Escuro */
    @media (prefers-color-scheme: dark) {
        th, td, h1, h2, a, form {
            color: white !important; /* Define a cor do texto como branco */
        }

        thead {
            background-color: #1f2937; /* Cor de fundo do cabeçalho da tabela */
        }

        tbody tr {
            background-color: #111827; /* Cor de fundo das linhas da tabela */
        }

        #button1 {
            border: 1px solid white; /* Adiciona uma borda branca aos links */
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
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

    #button_search:hover {
        background-color: #0056b3;
    }
</style>
<!--==================================================-->






