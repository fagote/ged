<x-icon></x-icon>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@extends('admin.layouts.app')


@section('title', 'Aguardando Aprovação')
@section('content')

<br>

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
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    ARQUIVOS AGUARDANDO APROVAÇÃO
</h2><br>
<a class="button" href="{{ route('files.create') }}" style="background-color: #8a8a8a; color:#ffffff; ">Adicionar Novo Arquivo</a>
<a href="{{route('arquivosAprovados.index')}}" class="button">Arquivos Aprovados</a>
<a href="{{route('arquivosAtivos.index')}}" class="button" style="background-color: #1dac00; ">Arquivos Ativos</a>
<a href="{{route('arquivosReprovados.index')}}" class="button" style="background-color: #e54646;">Arquivos Reprovados</a>
<a href="{{route('arquivosInativos.index')}}" class="button" style="background-color: #000000; color:#ffffff">Arquivos Inativos</a>


<br><br>

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
                <td>
                        @php
                            $empresaIds = [$file->id_empresa1, $file->id_empresa2, $file->id_empresa3, $file->id_empresa4];
                            $nomesEmpresas = collect($empresaIds)
                                ->filter() // Remove IDs nulos
                                ->map(fn($id) => \App\Models\Company::find($id)?->name_empresa ?? 'Empresa não encontrada')
                                ->join(', '); // Junta os nomes com vírgulas
                        @endphp
                        {{$nomesEmpresas ?: 'Nenhuma empresa definida'}}
                    </td>
                    <td>
                        @php
                            $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32,$file->id_setor33,$file->id_setor34,$file->id_setor35,$file->id_setor36,$file->id_setor37,$file->id_setor38];
                            $nomesSetores = collect($setoresIds)
                                ->filter() // Remove IDs nulos
                                ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                ->join(', '); // Junta os nomes com vírgulas
                        @endphp
                        {{$nomesSetores ?: 'Nenhum setor definido'}}
                    </td>  
                <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}
                    
                </td>
                <td>
                    <form class="button" action="{{ route('files.aprovar', $file->id) }}" method="POST">
                        @csrf
                        <button type="submit">Aprovar</button>
                    </form>

                    
                    
                    <button type="button" class="button_excluir" data-toggle="modal" data-target="#reprovarModal">
                        Reprovar
                    </button>
                    
                    <div class="modal fade" id="reprovarModal" tabindex="-1" role="dialog" aria-labelledby="reprovarModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reprovarModalLabel">Motivo da Reprovação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="reprovarForm" action="{{ route('files.reprovar', $file->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="motivo" class="text-light">Escreva o motivo da reprovação:</label>
                                            <textarea class="form-control" id="motivo" name="motivoReprovacao" rows="4" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-danger">Reprovar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    


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


    .button_excluir{
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
    .button_excluir:hover{
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

    /*CONFIGURAÇÕES MODAL*/

    /* Estilo específico para o modal */
    #reprovarModal .modal-content {
        background-color: #343a40; /* Cor de fundo escura */
        color: #ffffff; /* Texto claro */
    }

    #reprovarModal .modal-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Linha inferior do cabeçalho */
    }

    #reprovarModal .modal-header .close {
        color: #ffffff; /* Cor do botão de fechar */
    }

    #reprovarModal .modal-body .form-control {
        background-color: #495057; /* Cor de fundo do textarea */
        color: #ffffff; /* Texto claro no textarea */
    }

    #reprovarModal .modal-body .form-control:focus {
        background-color: #6c757d; /* Cor de fundo do textarea ao focar */
        color: #ffffff; /* Texto claro no textarea ao focar */
    }

    #reprovarModal .btn-danger {
        background-color: #dc3545; /* Cor do botão "Reprovar" */
        border: none; /* Sem borda */
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






