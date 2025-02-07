<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Listagem dos usuários')
@section('content')


<br>


<!--==================================================-->
<!-- Formulário de Busca -->
<div class="busca">
    <form id="form_search" action="{{ route('users.search') }}" method="GET">
        <input id="input_search" type="text" name="search" placeholder="Buscar usuários..." value="{{ request('search') }}" required>
        <button id="button_search" type="submit">Buscar</button>
    </form>

    <!-- Mostrando os Usuários Encontrados -->
    @if(request('search') && isset($users) && $users->count())
        <ul>
            @foreach($users as $user)
                <!--<li>{{ $user->name }}</li>--> 
            @endforeach
        </ul>
        
    @endif
</div>

<!--==================================================-->

    



<a href="{{ route('users.create') }}" class="button">Adicionar Novo Usuário</a>
<br>
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
                <th>Nome</th>
                <th>E-mail</th>
                <th>Empresa</th>
                <th>Setor</th>
                @if(Auth::check() && Auth::user()->id_permission == 1)
                    <th>Permissão do Usuário</th>
                @endif
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)

            @if(Auth::check() && Auth::user()->id_permission == 2)
                @if($user->id_permission == 1)
                    @continue
                @endif
            @endif

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td> 
                <td>
                    @php
                        $empresaIds = [$user->id_empresa1, $user->id_empresa2, $user->id_empresa3, $user->id_empresa4];
                        $nomesEmpresas = collect($empresaIds)
                            ->filter() // Remove IDs nulos
                            ->map(fn($id) => \App\Models\Company::find($id)?->name_empresa ?? 'Empresa não encontrada')
                            ->join(', '); // Junta os nomes com vírgulas
                    @endphp
                    {{$nomesEmpresas ?: 'Nenhuma empresa definida'}}
                </td>
                <td>
                    @php
                        $setoresIds = [$user->id_setor1, $user->id_setor2, $user->id_setor3, $user->id_setor4, $user->id_setor5, $user->id_setor6,$user->id_setor7,$user->id_setor8,$user->id_setor9,$user->id_setor10,$user->id_setor11,$user->id_setor12,$user->id_setor13,$user->id_setor14,$user->id_setor15,$user->id_setor16,$user->id_setor17,$user->id_setor18,$user->id_setor19,$user->id_setor20,$user->id_setor21,$user->id_setor22,$user->id_setor23,$user->id_setor24,$user->id_setor25,$user->id_setor26,$user->id_setor27,$user->id_setor28,$user->id_setor29,$user->id_setor30,$user->id_setor31,$user->id_setor32,$user->id_setor33,$user->id_setor34,$user->id_setor35,$user->id_setor36,$user->id_setor37,$user->id_setor38];
                        $nomesSetores = collect($setoresIds)
                            ->filter() // Remove IDs nulos
                            ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                            ->join(', '); // Junta os nomes com vírgulas
                    @endphp
                    {{$nomesSetores ?: 'Nenhum setor definido'}}
                </td>

                @if(Auth::check() && Auth::user()->id_permission == 1)
                    <td>{{$user->permission?->descricao ?? 'Permissão não definida'}}</td>
                @endif

                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="button">Edit</a>
                    <a id="button_excluir" href="{{ route('users.show', $user->id) }}">Excluir</a>
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
        th, td, h1, h2, a, form {
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






