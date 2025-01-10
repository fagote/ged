<x-icon></x-icon>
<title>File Manager</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Olá {{ auth()->user()->name }}!
            @can('is-admin')
                Você possui perfil administrador!
            @endcan
        </h2>
    </x-slot>

    
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="uploaded-files">
                
                @if(Auth::check() && ((Auth::user()->id_empresa1 == 22 || Auth::user()->id_empresa2 == 22 || Auth::user()->id_empresa3 == 22 || Auth::user()->id_empresa4 == 22) && (Auth::user()->id_setor1 == 37 || Auth::user()->id_setor2 == 37 || Auth::user()->id_setor3 == 37 || 
                    Auth::user()->id_setor4 == 37 || Auth::user()->id_setor5 == 37 || Auth::user()->id_setor6 == 37 || 
                    Auth::user()->id_setor7 == 37 || Auth::user()->id_setor8 == 37 || Auth::user()->id_setor9 == 37 || 
                    Auth::user()->id_setor10 == 37 || Auth::user()->id_setor11 == 37 || Auth::user()->id_setor12 == 37 || 
                    Auth::user()->id_setor13 == 37 || Auth::user()->id_setor14 == 37 || Auth::user()->id_setor15 == 37 || 
                    Auth::user()->id_setor16 == 37 || Auth::user()->id_setor17 == 37 || Auth::user()->id_setor18 == 37 || 
                    Auth::user()->id_setor19 == 37 || Auth::user()->id_setor20 == 37 || Auth::user()->id_setor21 == 37 || 
                    Auth::user()->id_setor22 == 37 || Auth::user()->id_setor23 == 37 || Auth::user()->id_setor24 == 37 || 
                    Auth::user()->id_setor25 == 37 || Auth::user()->id_setor26 == 37 || Auth::user()->id_setor27 == 37 || 
                    Auth::user()->id_setor28 == 37 || Auth::user()->id_setor29 == 37 || Auth::user()->id_setor30 == 37 || 
                    Auth::user()->id_setor31 == 37 || Auth::user()->id_setor32 == 37 || Auth::user()->id_setor33 == 37 || 
                    Auth::user()->id_setor34 == 37 || Auth::user()->id_setor35 == 37 || Auth::user()->id_setor36 == 37 || 
                    Auth::user()->id_setor37 == 37 || Auth::user()->id_setor38 == 37)) || (Auth::user()->id_permission == 1 || 
                    Auth::user()->id_permission == 2))

                    

                    <h2> ARQUIVOS: </h2><br>
    
    
                    <table>
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Versão</th>
                                @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                    <th>ID User</th>
                                    <th>ID Empresa</th>
                                    <th>ID Setor</th>
                                    <th>ID Macro</th>
                                    <th>Ativo</th>
                                    <th>Aprovação</th>
                                @endif
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($files as $file)
    
                            @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                    @continue
                                @endif
                            @endif
    
                            <tr>
                                <td>{{ $file->codigo }}</td>
                                <td>{{ $file->versao }}</td>
                                @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                            $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                            $nomesSetores = collect($setoresIds)
                                                ->filter() // Remove IDs nulos
                                                ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                ->join(', '); // Junta os nomes com vírgulas
                                        @endphp
                                        {{$nomesSetores ?: 'Nenhum setor definido'}}
                                    </td>
                                    <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                    <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                    <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                @endif
                                <td>
                                    <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                    @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                        <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                        <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                    @endif
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
                @else
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Você não possui acesso a esta pasta!
                    </h2>
                @endif

                   

            </div>
        </div>
    </div>
</div>
        
</x-app-layout>





<style>
    .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

.file-system {
            list-style: none;
            padding: 0;
        }

        .file-system li {
            padding: 10px;
            border-bottom: 1px solid #ccc; /* Linha entre pastas e arquivos */
        }

        .folder {

            color: #2c3e50;
            font-weight: bold;
            
            @media(prefers-color-scheme: dark){
                color: white;
            }

        }

        .file {
            color: #16a085;
        }

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

/* Formatação para a tabela de arquivos */

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
        font-size: 16px; /* Tamanho da fonte */
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


{{--

@if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 36 || Auth::user()->id_setor2 == 36 || Auth::user()->id_setor3 == 36 || 
                            Auth::user()->id_setor4 == 36 || Auth::user()->id_setor5 == 36 || Auth::user()->id_setor6 == 36 || 
                            Auth::user()->id_setor7 == 36 || Auth::user()->id_setor8 == 36 || Auth::user()->id_setor9 == 36 || 
                            Auth::user()->id_setor10 == 36 || Auth::user()->id_setor11 == 36 || Auth::user()->id_setor12 == 36 || 
                            Auth::user()->id_setor13 == 36 || Auth::user()->id_setor14 == 36 || Auth::user()->id_setor15 == 36 || 
                            Auth::user()->id_setor16 == 36 || Auth::user()->id_setor17 == 36 || Auth::user()->id_setor18 == 36 || 
                            Auth::user()->id_setor19 == 36 || Auth::user()->id_setor20 == 36 || Auth::user()->id_setor21 == 36 || 
                            Auth::user()->id_setor22 == 36 || Auth::user()->id_setor23 == 36 || Auth::user()->id_setor24 == 36 || 
                            Auth::user()->id_setor25 == 36 || Auth::user()->id_setor26 == 36 || Auth::user()->id_setor27 == 36 || 
                            Auth::user()->id_setor28 == 36 || Auth::user()->id_setor29 == 36 || Auth::user()->id_setor30 == 36 || 
                            Auth::user()->id_setor31 == 36 || Auth::user()->id_setor32 == 36 || Auth::user()->id_setor33 == 36 || 
                            Auth::user()->id_setor34 == 36 || Auth::user()->id_setor35 == 36 || Auth::user()->id_setor36 == 36 || 
                            Auth::user()->id_setor37 == 36 || Auth::user()->id_setor38 == 36)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 5 || Auth::user()->id_setor2 == 5 || Auth::user()->id_setor3 == 5 || 
                            Auth::user()->id_setor4 == 5 || Auth::user()->id_setor5 == 5 || Auth::user()->id_setor6 == 5 || 
                            Auth::user()->id_setor7 == 5 || Auth::user()->id_setor8 == 5 || Auth::user()->id_setor9 == 5 || 
                            Auth::user()->id_setor10 == 5 || Auth::user()->id_setor11 == 5 || Auth::user()->id_setor12 == 5 || 
                            Auth::user()->id_setor13 == 5 || Auth::user()->id_setor14 == 5 || Auth::user()->id_setor15 == 5 || 
                            Auth::user()->id_setor16 == 5 || Auth::user()->id_setor17 == 5 || Auth::user()->id_setor18 == 5 || 
                            Auth::user()->id_setor19 == 5 || Auth::user()->id_setor20 == 5 || Auth::user()->id_setor21 == 5 || 
                            Auth::user()->id_setor22 == 5 || Auth::user()->id_setor23 == 5 || Auth::user()->id_setor24 == 5 || 
                            Auth::user()->id_setor25 == 5 || Auth::user()->id_setor26 == 5 || Auth::user()->id_setor27 == 5 || 
                            Auth::user()->id_setor28 == 5 || Auth::user()->id_setor29 == 5 || Auth::user()->id_setor30 == 5 || 
                            Auth::user()->id_setor31 == 5 || Auth::user()->id_setor32 == 5 || Auth::user()->id_setor33 == 5 || 
                            Auth::user()->id_setor34 == 5 || Auth::user()->id_setor35 == 5 || Auth::user()->id_setor36 == 5 || 
                            Auth::user()->id_setor37 == 5 || Auth::user()->id_setor38 == 5 ))|| (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 24 || Auth::user()->id_setor2 == 24 || Auth::user()->id_setor3 == 24 || 
                            Auth::user()->id_setor4 == 24 || Auth::user()->id_setor5 == 24 || Auth::user()->id_setor6 == 24 || 
                            Auth::user()->id_setor7 == 24 || Auth::user()->id_setor8 == 24 || Auth::user()->id_setor9 == 24 || 
                            Auth::user()->id_setor10 == 24 || Auth::user()->id_setor11 == 24 || Auth::user()->id_setor12 == 24 || 
                            Auth::user()->id_setor13 == 24 || Auth::user()->id_setor14 == 24 || Auth::user()->id_setor15 == 24 || 
                            Auth::user()->id_setor16 == 24 || Auth::user()->id_setor17 == 24 || Auth::user()->id_setor18 == 24 || 
                            Auth::user()->id_setor19 == 24 || Auth::user()->id_setor20 == 24 || Auth::user()->id_setor21 == 24 || 
                            Auth::user()->id_setor22 == 24 || Auth::user()->id_setor23 == 24 || Auth::user()->id_setor24 == 24 || 
                            Auth::user()->id_setor25 == 24 || Auth::user()->id_setor26 == 24 || Auth::user()->id_setor27 == 24 || 
                            Auth::user()->id_setor28 == 24 || Auth::user()->id_setor29 == 24 || Auth::user()->id_setor30 == 24 || 
                            Auth::user()->id_setor31 == 24 || Auth::user()->id_setor32 == 24 || Auth::user()->id_setor33 == 24 || 
                            Auth::user()->id_setor34 == 24 || Auth::user()->id_setor35 == 24 || Auth::user()->id_setor36 == 24 || 
                            Auth::user()->id_setor37 == 24 || Auth::user()->id_setor38 == 24)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 32 || Auth::user()->id_setor2 == 32 || Auth::user()->id_setor3 == 32 || 
                            Auth::user()->id_setor4 == 32 || Auth::user()->id_setor5 == 32 || Auth::user()->id_setor6 == 32 || 
                            Auth::user()->id_setor7 == 32 || Auth::user()->id_setor8 == 32 || Auth::user()->id_setor9 == 32 || 
                            Auth::user()->id_setor10 == 32 || Auth::user()->id_setor11 == 32 || Auth::user()->id_setor12 == 32 || 
                            Auth::user()->id_setor13 == 32 || Auth::user()->id_setor14 == 32 || Auth::user()->id_setor15 == 32 || 
                            Auth::user()->id_setor16 == 32 || Auth::user()->id_setor17 == 32 || Auth::user()->id_setor18 == 32 || 
                            Auth::user()->id_setor19 == 32 || Auth::user()->id_setor20 == 32 || Auth::user()->id_setor21 == 32 || 
                            Auth::user()->id_setor22 == 32 || Auth::user()->id_setor23 == 32 || Auth::user()->id_setor24 == 32 || 
                            Auth::user()->id_setor25 == 32 || Auth::user()->id_setor26 == 32 || Auth::user()->id_setor27 == 32 || 
                            Auth::user()->id_setor28 == 32 || Auth::user()->id_setor29 == 32 || Auth::user()->id_setor30 == 32 || 
                            Auth::user()->id_setor31 == 32 || Auth::user()->id_setor32 == 32 || Auth::user()->id_setor33 == 32 || 
                            Auth::user()->id_setor34 == 32 || Auth::user()->id_setor35 == 32 || Auth::user()->id_setor36 == 32 || 
                            Auth::user()->id_setor37 == 32 || Auth::user()->id_setor38 == 32)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 34 || Auth::user()->id_setor2 == 34 || Auth::user()->id_setor3 == 34 || 
                            Auth::user()->id_setor4 == 34 || Auth::user()->id_setor5 == 34 || Auth::user()->id_setor6 == 34 || 
                            Auth::user()->id_setor7 == 34 || Auth::user()->id_setor8 == 34 || Auth::user()->id_setor9 == 34 || 
                            Auth::user()->id_setor10 == 34 || Auth::user()->id_setor11 == 34 || Auth::user()->id_setor12 == 34 || 
                            Auth::user()->id_setor13 == 34 || Auth::user()->id_setor14 == 34 || Auth::user()->id_setor15 == 34 || 
                            Auth::user()->id_setor16 == 34 || Auth::user()->id_setor17 == 34 || Auth::user()->id_setor18 == 34 || 
                            Auth::user()->id_setor19 == 34 || Auth::user()->id_setor20 == 34 || Auth::user()->id_setor21 == 34 || 
                            Auth::user()->id_setor22 == 34 || Auth::user()->id_setor23 == 34 || Auth::user()->id_setor24 == 34 || 
                            Auth::user()->id_setor25 == 34 || Auth::user()->id_setor26 == 34 || Auth::user()->id_setor27 == 34 || 
                            Auth::user()->id_setor28 == 34 || Auth::user()->id_setor29 == 34 || Auth::user()->id_setor30 == 34 || 
                            Auth::user()->id_setor31 == 34 || Auth::user()->id_setor34 == 34 || Auth::user()->id_setor33 == 34 || 
                            Auth::user()->id_setor34 == 34 || Auth::user()->id_setor35 == 34 || Auth::user()->id_setor36 == 34 || 
                            Auth::user()->id_setor37 == 34 || Auth::user()->id_setor38 == 34)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 21 || Auth::user()->id_setor2 == 21 || Auth::user()->id_setor3 == 21 || 
                            Auth::user()->id_setor4 == 21 || Auth::user()->id_setor5 == 21 || Auth::user()->id_setor6 == 21 || 
                            Auth::user()->id_setor7 == 21 || Auth::user()->id_setor8 == 21 || Auth::user()->id_setor9 == 21 || 
                            Auth::user()->id_setor10 == 21 || Auth::user()->id_setor11 == 21 || Auth::user()->id_setor12 == 21 || 
                            Auth::user()->id_setor13 == 21 || Auth::user()->id_setor14 == 21 || Auth::user()->id_setor15 == 21 || 
                            Auth::user()->id_setor16 == 21 || Auth::user()->id_setor17 == 21 || Auth::user()->id_setor18 == 21 || 
                            Auth::user()->id_setor19 == 21 || Auth::user()->id_setor20 == 21 || Auth::user()->id_setor21 == 21 || 
                            Auth::user()->id_setor22 == 21 || Auth::user()->id_setor23 == 21 || Auth::user()->id_setor24 == 21 || 
                            Auth::user()->id_setor25 == 21 || Auth::user()->id_setor26 == 21 || Auth::user()->id_setor27 == 21 || 
                            Auth::user()->id_setor28 == 21 || Auth::user()->id_setor29 == 21 || Auth::user()->id_setor30 == 21 || 
                            Auth::user()->id_setor31 == 21 || Auth::user()->id_setor21 == 21 || Auth::user()->id_setor33 == 21 || 
                            Auth::user()->id_setor21 == 21 || Auth::user()->id_setor35 == 21 || Auth::user()->id_setor36 == 21 || 
                            Auth::user()->id_setor37 == 21 || Auth::user()->id_setor38 == 21)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 25 || Auth::user()->id_setor2 == 25 || Auth::user()->id_setor3 == 25 || 
                            Auth::user()->id_setor4 == 25 || Auth::user()->id_setor5 == 25 || Auth::user()->id_setor6 == 25 || 
                            Auth::user()->id_setor7 == 25 || Auth::user()->id_setor8 == 25 || Auth::user()->id_setor9 == 25 || 
                            Auth::user()->id_setor10 == 25 || Auth::user()->id_setor11 == 25 || Auth::user()->id_setor12 == 25 || 
                            Auth::user()->id_setor13 == 25 || Auth::user()->id_setor14 == 25 || Auth::user()->id_setor15 == 25 || 
                            Auth::user()->id_setor16 == 25 || Auth::user()->id_setor17 == 25 || Auth::user()->id_setor18 == 25 || 
                            Auth::user()->id_setor19 == 25 || Auth::user()->id_setor20 == 25 || Auth::user()->id_setor21 == 25 || 
                            Auth::user()->id_setor22 == 25 || Auth::user()->id_setor23 == 25 || Auth::user()->id_setor24 == 25 || 
                            Auth::user()->id_setor25 == 25 || Auth::user()->id_setor26 == 25 || Auth::user()->id_setor27 == 25 || 
                            Auth::user()->id_setor28 == 25 || Auth::user()->id_setor29 == 25 || Auth::user()->id_setor30 == 25 || 
                            Auth::user()->id_setor31 == 25 || Auth::user()->id_setor34 == 25 || Auth::user()->id_setor33 == 25 || 
                            Auth::user()->id_setor34 == 25 || Auth::user()->id_setor35 == 25 || Auth::user()->id_setor36 == 25 || 
                            Auth::user()->id_setor37 == 25 || Auth::user()->id_setor38 == 25)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 26 || Auth::user()->id_setor2 == 26 || Auth::user()->id_setor3 == 26 || 
                            Auth::user()->id_setor4 == 26 || Auth::user()->id_setor5 == 26 || Auth::user()->id_setor6 == 26 || 
                            Auth::user()->id_setor7 == 26 || Auth::user()->id_setor8 == 26 || Auth::user()->id_setor9 == 26 || 
                            Auth::user()->id_setor10 == 26 || Auth::user()->id_setor11 == 26 || Auth::user()->id_setor12 == 26 || 
                            Auth::user()->id_setor13 == 26 || Auth::user()->id_setor14 == 26 || Auth::user()->id_setor15 == 26 || 
                            Auth::user()->id_setor16 == 26 || Auth::user()->id_setor17 == 26 || Auth::user()->id_setor18 == 26 || 
                            Auth::user()->id_setor19 == 26 || Auth::user()->id_setor20 == 26 || Auth::user()->id_setor21 == 26 || 
                            Auth::user()->id_setor22 == 26 || Auth::user()->id_setor23 == 26 || Auth::user()->id_setor24 == 26 || 
                            Auth::user()->id_setor25 == 26 || Auth::user()->id_setor26 == 26 || Auth::user()->id_setor27 == 26 || 
                            Auth::user()->id_setor28 == 26 || Auth::user()->id_setor29 == 26 || Auth::user()->id_setor30 == 26 || 
                            Auth::user()->id_setor31 == 26 || Auth::user()->id_setor34 == 26 || Auth::user()->id_setor33 == 26 || 
                            Auth::user()->id_setor34 == 26 || Auth::user()->id_setor35 == 26 || Auth::user()->id_setor36 == 26 || 
                            Auth::user()->id_setor37 == 26 || Auth::user()->id_setor38 == 26)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 27 || Auth::user()->id_setor2 == 27 || Auth::user()->id_setor3 == 27 || 
                            Auth::user()->id_setor4 == 27 || Auth::user()->id_setor5 == 27 || Auth::user()->id_setor6 == 27 || 
                            Auth::user()->id_setor7 == 27 || Auth::user()->id_setor8 == 27 || Auth::user()->id_setor9 == 27 || 
                            Auth::user()->id_setor10 == 27 || Auth::user()->id_setor11 == 27 || Auth::user()->id_setor12 == 27 || 
                            Auth::user()->id_setor13 == 27 || Auth::user()->id_setor14 == 27 || Auth::user()->id_setor15 == 27 || 
                            Auth::user()->id_setor16 == 27 || Auth::user()->id_setor17 == 27 || Auth::user()->id_setor18 == 27 || 
                            Auth::user()->id_setor19 == 27 || Auth::user()->id_setor20 == 27 || Auth::user()->id_setor21 == 27 || 
                            Auth::user()->id_setor22 == 27 || Auth::user()->id_setor23 == 27 || Auth::user()->id_setor24 == 27 || 
                            Auth::user()->id_setor25 == 27 || Auth::user()->id_setor26 == 27 || Auth::user()->id_setor27 == 27 || 
                            Auth::user()->id_setor28 == 27 || Auth::user()->id_setor29 == 27 || Auth::user()->id_setor30 == 27 || 
                            Auth::user()->id_setor31 == 27 || Auth::user()->id_setor34 == 27 || Auth::user()->id_setor33 == 27 || 
                            Auth::user()->id_setor34 == 27 || Auth::user()->id_setor35 == 27 || Auth::user()->id_setor36 == 27 || 
                            Auth::user()->id_setor37 == 27 || Auth::user()->id_setor38 == 27)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 28 || Auth::user()->id_setor2 == 28 || Auth::user()->id_setor3 == 28 || 
                            Auth::user()->id_setor4 == 28 || Auth::user()->id_setor5 == 28 || Auth::user()->id_setor6 == 28 || 
                            Auth::user()->id_setor7 == 28 || Auth::user()->id_setor8 == 28 || Auth::user()->id_setor9 == 28 || 
                            Auth::user()->id_setor10 == 28 || Auth::user()->id_setor11 == 28 || Auth::user()->id_setor12 == 28 || 
                            Auth::user()->id_setor13 == 28 || Auth::user()->id_setor14 == 28 || Auth::user()->id_setor15 == 28 || 
                            Auth::user()->id_setor16 == 28 || Auth::user()->id_setor17 == 28 || Auth::user()->id_setor18 == 28 || 
                            Auth::user()->id_setor19 == 28 || Auth::user()->id_setor20 == 28 || Auth::user()->id_setor21 == 28 || 
                            Auth::user()->id_setor22 == 28 || Auth::user()->id_setor23 == 28 || Auth::user()->id_setor24 == 28 || 
                            Auth::user()->id_setor25 == 28 || Auth::user()->id_setor26 == 28 || Auth::user()->id_setor27 == 28 || 
                            Auth::user()->id_setor28 == 28 || Auth::user()->id_setor29 == 28 || Auth::user()->id_setor30 == 28 || 
                            Auth::user()->id_setor31 == 28 || Auth::user()->id_setor34 == 28 || Auth::user()->id_setor33 == 28 || 
                            Auth::user()->id_setor34 == 28 || Auth::user()->id_setor35 == 28 || Auth::user()->id_setor36 == 28 || 
                            Auth::user()->id_setor37 == 28 || Auth::user()->id_setor38 == 28)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 33 || Auth::user()->id_setor2 == 33 || Auth::user()->id_setor3 == 33 || 
                            Auth::user()->id_setor4 == 33 || Auth::user()->id_setor5 == 33 || Auth::user()->id_setor6 == 33 || 
                            Auth::user()->id_setor7 == 33 || Auth::user()->id_setor8 == 33 || Auth::user()->id_setor9 == 33 || 
                            Auth::user()->id_setor10 == 33 || Auth::user()->id_setor11 == 33 || Auth::user()->id_setor12 == 33 || 
                            Auth::user()->id_setor13 == 33 || Auth::user()->id_setor14 == 33 || Auth::user()->id_setor15 == 33 || 
                            Auth::user()->id_setor16 == 33 || Auth::user()->id_setor17 == 33 || Auth::user()->id_setor18 == 33 || 
                            Auth::user()->id_setor19 == 33 || Auth::user()->id_setor20 == 33 || Auth::user()->id_setor21 == 33 || 
                            Auth::user()->id_setor22 == 33 || Auth::user()->id_setor23 == 33 || Auth::user()->id_setor24 == 33 || 
                            Auth::user()->id_setor25 == 33 || Auth::user()->id_setor26 == 33 || Auth::user()->id_setor27 == 33 || 
                            Auth::user()->id_setor28 == 33 || Auth::user()->id_setor29 == 33 || Auth::user()->id_setor30 == 33 || 
                            Auth::user()->id_setor31 == 33 || Auth::user()->id_setor34 == 33 || Auth::user()->id_setor33 == 33 || 
                            Auth::user()->id_setor34 == 33 || Auth::user()->id_setor35 == 33 || Auth::user()->id_setor36 == 33 || 
                            Auth::user()->id_setor37 == 33 || Auth::user()->id_setor38 == 33)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 3 || Auth::user()->id_setor2 == 3 || Auth::user()->id_setor3 == 3 || 
                            Auth::user()->id_setor4 == 3 || Auth::user()->id_setor5 == 3 || Auth::user()->id_setor6 == 3 || 
                            Auth::user()->id_setor7 == 3 || Auth::user()->id_setor8 == 3 || Auth::user()->id_setor9 == 3 || 
                            Auth::user()->id_setor10 == 3 || Auth::user()->id_setor11 == 3 || Auth::user()->id_setor12 == 3 || 
                            Auth::user()->id_setor13 == 3 || Auth::user()->id_setor14 == 3 || Auth::user()->id_setor15 == 3 || 
                            Auth::user()->id_setor16 == 3 || Auth::user()->id_setor17 == 3 || Auth::user()->id_setor18 == 3 || 
                            Auth::user()->id_setor19 == 3 || Auth::user()->id_setor20 == 3 || Auth::user()->id_setor21 == 3 || 
                            Auth::user()->id_setor22 == 3 || Auth::user()->id_setor23 == 3 || Auth::user()->id_setor24 == 3 || 
                            Auth::user()->id_setor25 == 3 || Auth::user()->id_setor26 == 3 || Auth::user()->id_setor27 == 3 || 
                            Auth::user()->id_setor28 == 3 || Auth::user()->id_setor29 == 3 || Auth::user()->id_setor30 == 3 || 
                            Auth::user()->id_setor31 == 3 || Auth::user()->id_setor34 == 3 || Auth::user()->id_setor33 == 3 || 
                            Auth::user()->id_setor34 == 3 || Auth::user()->id_setor35 == 3 || Auth::user()->id_setor36 == 3 || 
                            Auth::user()->id_setor37 == 3 || Auth::user()->id_setor38 == 3 ))|| (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 29 || Auth::user()->id_setor2 == 29 || Auth::user()->id_setor3 == 29 || 
                            Auth::user()->id_setor4 == 29 || Auth::user()->id_setor5 == 29 || Auth::user()->id_setor6 == 29 || 
                            Auth::user()->id_setor7 == 29 || Auth::user()->id_setor8 == 29 || Auth::user()->id_setor9 == 29 || 
                            Auth::user()->id_setor10 == 29 || Auth::user()->id_setor11 == 29 || Auth::user()->id_setor12 == 29 || 
                            Auth::user()->id_setor13 == 29 || Auth::user()->id_setor14 == 29 || Auth::user()->id_setor15 == 29 || 
                            Auth::user()->id_setor16 == 29 || Auth::user()->id_setor17 == 29 || Auth::user()->id_setor18 == 29 || 
                            Auth::user()->id_setor19 == 29 || Auth::user()->id_setor20 == 29 || Auth::user()->id_setor21 == 29 || 
                            Auth::user()->id_setor22 == 29 || Auth::user()->id_setor23 == 29 || Auth::user()->id_setor24 == 29 || 
                            Auth::user()->id_setor25 == 29 || Auth::user()->id_setor26 == 29 || Auth::user()->id_setor27 == 29 || 
                            Auth::user()->id_setor28 == 29 || Auth::user()->id_setor29 == 29 || Auth::user()->id_setor30 == 29 || 
                            Auth::user()->id_setor31 == 29 || Auth::user()->id_setor34 == 29 || Auth::user()->id_setor33 == 29 || 
                            Auth::user()->id_setor34 == 29 || Auth::user()->id_setor35 == 29 || Auth::user()->id_setor36 == 29 || 
                            Auth::user()->id_setor37 == 29 || Auth::user()->id_setor38 == 29)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 7 || Auth::user()->id_setor2 == 7 || Auth::user()->id_setor3 == 7 || 
                            Auth::user()->id_setor4 == 7 || Auth::user()->id_setor5 == 7 || Auth::user()->id_setor6 == 7 || 
                            Auth::user()->id_setor7 == 7 || Auth::user()->id_setor8 == 7 || Auth::user()->id_setor9 == 7 || 
                            Auth::user()->id_setor10 == 7 || Auth::user()->id_setor11 == 7 || Auth::user()->id_setor12 == 7 || 
                            Auth::user()->id_setor13 == 7 || Auth::user()->id_setor14 == 7 || Auth::user()->id_setor15 == 7 || 
                            Auth::user()->id_setor16 == 7 || Auth::user()->id_setor17 == 7 || Auth::user()->id_setor18 == 7 || 
                            Auth::user()->id_setor19 == 7 || Auth::user()->id_setor20 == 7 || Auth::user()->id_setor21 == 7 || 
                            Auth::user()->id_setor22 == 7 || Auth::user()->id_setor23 == 7 || Auth::user()->id_setor24 == 7 || 
                            Auth::user()->id_setor25 == 7 || Auth::user()->id_setor26 == 7 || Auth::user()->id_setor27 == 7 || 
                            Auth::user()->id_setor28 == 7 || Auth::user()->id_setor29 == 7 || Auth::user()->id_setor30 == 7 || 
                            Auth::user()->id_setor31 == 7 || Auth::user()->id_setor34 == 7 || Auth::user()->id_setor33 == 7 || 
                            Auth::user()->id_setor34 == 7 || Auth::user()->id_setor35 == 7 || Auth::user()->id_setor36 == 7 || 
                            Auth::user()->id_setor37 == 7 || Auth::user()->id_setor38 == 7 ))|| (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 30 || Auth::user()->id_setor2 == 30 || Auth::user()->id_setor3 == 30 || 
                            Auth::user()->id_setor4 == 30 || Auth::user()->id_setor5 == 30 || Auth::user()->id_setor6 == 30 || 
                            Auth::user()->id_setor7 == 30 || Auth::user()->id_setor8 == 30 || Auth::user()->id_setor9 == 30 || 
                            Auth::user()->id_setor10 == 30 || Auth::user()->id_setor11 == 30 || Auth::user()->id_setor12 == 30 || 
                            Auth::user()->id_setor13 == 30 || Auth::user()->id_setor14 == 30 || Auth::user()->id_setor15 == 30 || 
                            Auth::user()->id_setor16 == 30 || Auth::user()->id_setor17 == 30 || Auth::user()->id_setor18 == 30 || 
                            Auth::user()->id_setor19 == 30 || Auth::user()->id_setor20 == 30 || Auth::user()->id_setor21 == 30 || 
                            Auth::user()->id_setor22 == 30 || Auth::user()->id_setor23 == 30 || Auth::user()->id_setor24 == 30 || 
                            Auth::user()->id_setor25 == 30 || Auth::user()->id_setor26 == 30 || Auth::user()->id_setor27 == 30 || 
                            Auth::user()->id_setor28 == 30 || Auth::user()->id_setor29 == 30 || Auth::user()->id_setor30 == 30 || 
                            Auth::user()->id_setor31 == 30 || Auth::user()->id_setor34 == 30 || Auth::user()->id_setor33 == 30 || 
                            Auth::user()->id_setor34 == 30 || Auth::user()->id_setor35 == 30 || Auth::user()->id_setor36 == 30 || 
                            Auth::user()->id_setor37 == 30 || Auth::user()->id_setor38 == 30)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 4 || Auth::user()->id_setor2 == 4 || Auth::user()->id_setor3 == 4 || 
                            Auth::user()->id_setor4 == 4 || Auth::user()->id_setor5 == 4 || Auth::user()->id_setor6 == 4 || 
                            Auth::user()->id_setor7 == 4 || Auth::user()->id_setor8 == 4 || Auth::user()->id_setor9 == 4 || 
                            Auth::user()->id_setor10 == 4 || Auth::user()->id_setor11 == 4 || Auth::user()->id_setor12 == 4 || 
                            Auth::user()->id_setor13 == 4 || Auth::user()->id_setor14 == 4 || Auth::user()->id_setor15 == 4 || 
                            Auth::user()->id_setor16 == 4 || Auth::user()->id_setor17 == 4 || Auth::user()->id_setor18 == 4 || 
                            Auth::user()->id_setor19 == 4 || Auth::user()->id_setor20 == 4 || Auth::user()->id_setor21 == 4 || 
                            Auth::user()->id_setor22 == 4 || Auth::user()->id_setor23 == 4 || Auth::user()->id_setor24 == 4 || 
                            Auth::user()->id_setor25 == 4 || Auth::user()->id_setor26 == 4 || Auth::user()->id_setor27 == 4 || 
                            Auth::user()->id_setor28 == 4 || Auth::user()->id_setor29 == 4 || Auth::user()->id_setor30 == 4 || 
                            Auth::user()->id_setor31 == 4 || Auth::user()->id_setor34 == 4 || Auth::user()->id_setor33 == 4 || 
                            Auth::user()->id_setor34 == 4 || Auth::user()->id_setor35 == 4 || Auth::user()->id_setor36 == 4 || 
                            Auth::user()->id_setor37 == 4 || Auth::user()->id_setor38 == 4 ))|| (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 6 || Auth::user()->id_setor2 == 6 || Auth::user()->id_setor3 == 6 || 
                            Auth::user()->id_setor4 == 6 || Auth::user()->id_setor5 == 6 || Auth::user()->id_setor6 == 6 || 
                            Auth::user()->id_setor7 == 6 || Auth::user()->id_setor8 == 6 || Auth::user()->id_setor9 == 6 || 
                            Auth::user()->id_setor10 == 6 || Auth::user()->id_setor11 == 6 || Auth::user()->id_setor12 == 6 || 
                            Auth::user()->id_setor13 == 6 || Auth::user()->id_setor14 == 6 || Auth::user()->id_setor15 == 6 || 
                            Auth::user()->id_setor16 == 6 || Auth::user()->id_setor17 == 6 || Auth::user()->id_setor18 == 6 || 
                            Auth::user()->id_setor19 == 6 || Auth::user()->id_setor20 == 6 || Auth::user()->id_setor21 == 6 || 
                            Auth::user()->id_setor22 == 6 || Auth::user()->id_setor23 == 6 || Auth::user()->id_setor24 == 6 || 
                            Auth::user()->id_setor25 == 6 || Auth::user()->id_setor26 == 6 || Auth::user()->id_setor27 == 6 || 
                            Auth::user()->id_setor28 == 6 || Auth::user()->id_setor29 == 6 || Auth::user()->id_setor30 == 6 || 
                            Auth::user()->id_setor31 == 6 || Auth::user()->id_setor34 == 6 || Auth::user()->id_setor33 == 6 || 
                            Auth::user()->id_setor34 == 6 || Auth::user()->id_setor35 == 6 || Auth::user()->id_setor36 == 6 || 
                            Auth::user()->id_setor37 == 6 || Auth::user()->id_setor38 == 6 ))|| (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 37 || Auth::user()->id_setor2 == 37 || Auth::user()->id_setor3 == 37 || 
                            Auth::user()->id_setor4 == 37 || Auth::user()->id_setor5 == 37 || Auth::user()->id_setor6 == 37 || 
                            Auth::user()->id_setor7 == 37 || Auth::user()->id_setor8 == 37 || Auth::user()->id_setor9 == 37 || 
                            Auth::user()->id_setor10 == 37 || Auth::user()->id_setor11 == 37 || Auth::user()->id_setor12 == 37 || 
                            Auth::user()->id_setor13 == 37 || Auth::user()->id_setor14 == 37 || Auth::user()->id_setor15 == 37 || 
                            Auth::user()->id_setor16 == 37 || Auth::user()->id_setor17 == 37 || Auth::user()->id_setor18 == 37 || 
                            Auth::user()->id_setor19 == 37 || Auth::user()->id_setor20 == 37 || Auth::user()->id_setor21 == 37 || 
                            Auth::user()->id_setor22 == 37 || Auth::user()->id_setor23 == 37 || Auth::user()->id_setor24 == 37 || 
                            Auth::user()->id_setor25 == 37 || Auth::user()->id_setor26 == 37 || Auth::user()->id_setor27 == 37 || 
                            Auth::user()->id_setor28 == 37 || Auth::user()->id_setor29 == 37 || Auth::user()->id_setor30 == 37 || 
                            Auth::user()->id_setor31 == 37 || Auth::user()->id_setor34 == 37 || Auth::user()->id_setor33 == 37 || 
                            Auth::user()->id_setor34 == 37 || Auth::user()->id_setor35 == 37 || Auth::user()->id_setor36 == 37 || 
                            Auth::user()->id_setor37 == 37 || Auth::user()->id_setor38 == 37)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 2 || Auth::user()->id_setor2 == 2 || Auth::user()->id_setor3 == 2 || 
                            Auth::user()->id_setor4 == 2 || Auth::user()->id_setor5 == 2 || Auth::user()->id_setor6 == 2 || 
                            Auth::user()->id_setor7 == 2 || Auth::user()->id_setor8 == 2 || Auth::user()->id_setor9 == 2 || 
                            Auth::user()->id_setor10 == 2 || Auth::user()->id_setor11 == 2 || Auth::user()->id_setor12 == 2 || 
                            Auth::user()->id_setor13 == 2 || Auth::user()->id_setor14 == 2 || Auth::user()->id_setor15 == 2 || 
                            Auth::user()->id_setor16 == 2 || Auth::user()->id_setor17 == 2 || Auth::user()->id_setor18 == 2 || 
                            Auth::user()->id_setor19 == 2 || Auth::user()->id_setor20 == 2 || Auth::user()->id_setor21 == 2 || 
                            Auth::user()->id_setor22 == 2 || Auth::user()->id_setor23 == 2 || Auth::user()->id_setor24 == 2 || 
                            Auth::user()->id_setor25 == 2 || Auth::user()->id_setor26 == 2 || Auth::user()->id_setor27 == 2 || 
                            Auth::user()->id_setor28 == 2 || Auth::user()->id_setor29 == 2 || Auth::user()->id_setor30 == 2 || 
                            Auth::user()->id_setor31 == 2 || Auth::user()->id_setor34 == 2 || Auth::user()->id_setor33 == 2 || 
                            Auth::user()->id_setor34 == 2 || Auth::user()->id_setor35 == 2 || Auth::user()->id_setor36 == 2 || 
                            Auth::user()->id_setor37 == 2 || Auth::user()->id_setor38 == 2)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 8 || Auth::user()->id_setor2 == 8 || Auth::user()->id_setor3 == 8 || 
                            Auth::user()->id_setor4 == 8 || Auth::user()->id_setor5 == 8 || Auth::user()->id_setor6 == 8 || 
                            Auth::user()->id_setor7 == 8 || Auth::user()->id_setor8 == 8 || Auth::user()->id_setor9 == 8 || 
                            Auth::user()->id_setor10 == 8 || Auth::user()->id_setor11 == 8 || Auth::user()->id_setor12 == 8 || 
                            Auth::user()->id_setor13 == 8 || Auth::user()->id_setor14 == 8 || Auth::user()->id_setor15 == 8 || 
                            Auth::user()->id_setor16 == 8 || Auth::user()->id_setor17 == 8 || Auth::user()->id_setor18 == 8 || 
                            Auth::user()->id_setor19 == 8 || Auth::user()->id_setor20 == 8 || Auth::user()->id_setor21 == 8 || 
                            Auth::user()->id_setor22 == 8 || Auth::user()->id_setor23 == 8 || Auth::user()->id_setor24 == 8 || 
                            Auth::user()->id_setor25 == 8 || Auth::user()->id_setor26 == 8 || Auth::user()->id_setor27 == 8 || 
                            Auth::user()->id_setor28 == 8 || Auth::user()->id_setor29 == 8 || Auth::user()->id_setor30 == 8 || 
                            Auth::user()->id_setor31 == 8 || Auth::user()->id_setor34 == 8 || Auth::user()->id_setor33 == 8 || 
                            Auth::user()->id_setor34 == 8 || Auth::user()->id_setor35 == 8 || Auth::user()->id_setor36 == 8 || 
                            Auth::user()->id_setor37 == 8 || Auth::user()->id_setor38 == 8)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 9 || Auth::user()->id_setor2 == 9 || Auth::user()->id_setor3 == 9 || 
                            Auth::user()->id_setor4 == 9 || Auth::user()->id_setor5 == 9 || Auth::user()->id_setor6 == 9 || 
                            Auth::user()->id_setor7 == 9 || Auth::user()->id_setor8 == 9 || Auth::user()->id_setor9 == 9 || 
                            Auth::user()->id_setor10 == 9 || Auth::user()->id_setor11 == 9 || Auth::user()->id_setor12 == 9 || 
                            Auth::user()->id_setor13 == 9 || Auth::user()->id_setor14 == 9 || Auth::user()->id_setor15 == 9 || 
                            Auth::user()->id_setor16 == 9 || Auth::user()->id_setor17 == 9 || Auth::user()->id_setor18 == 9 || 
                            Auth::user()->id_setor19 == 9 || Auth::user()->id_setor20 == 9 || Auth::user()->id_setor21 == 9 || 
                            Auth::user()->id_setor22 == 9 || Auth::user()->id_setor23 == 9 || Auth::user()->id_setor24 == 9 || 
                            Auth::user()->id_setor25 == 9 || Auth::user()->id_setor26 == 9 || Auth::user()->id_setor27 == 9 || 
                            Auth::user()->id_setor28 == 9 || Auth::user()->id_setor29 == 9 || Auth::user()->id_setor30 == 9 || 
                            Auth::user()->id_setor31 == 9 || Auth::user()->id_setor34 == 9 || Auth::user()->id_setor33 == 9 || 
                            Auth::user()->id_setor34 == 9 || Auth::user()->id_setor35 == 9 || Auth::user()->id_setor36 == 9 || 
                            Auth::user()->id_setor37 == 9 || Auth::user()->id_setor38 == 9)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 31 || Auth::user()->id_setor2 == 31 || Auth::user()->id_setor3 == 31 || 
                            Auth::user()->id_setor4 == 31 || Auth::user()->id_setor5 == 31 || Auth::user()->id_setor6 == 31 || 
                            Auth::user()->id_setor7 == 31 || Auth::user()->id_setor8 == 31 || Auth::user()->id_setor9 == 31 || 
                            Auth::user()->id_setor10 == 31 || Auth::user()->id_setor11 == 31 || Auth::user()->id_setor12 == 31 || 
                            Auth::user()->id_setor13 == 31 || Auth::user()->id_setor14 == 31 || Auth::user()->id_setor15 == 31 || 
                            Auth::user()->id_setor16 == 31 || Auth::user()->id_setor17 == 31 || Auth::user()->id_setor18 == 31 || 
                            Auth::user()->id_setor19 == 31 || Auth::user()->id_setor20 == 31 || Auth::user()->id_setor21 == 31 || 
                            Auth::user()->id_setor22 == 31 || Auth::user()->id_setor23 == 31 || Auth::user()->id_setor24 == 31 || 
                            Auth::user()->id_setor25 == 31 || Auth::user()->id_setor26 == 31 || Auth::user()->id_setor27 == 31 || 
                            Auth::user()->id_setor28 == 31 || Auth::user()->id_setor29 == 31 || Auth::user()->id_setor30 == 31 || 
                            Auth::user()->id_setor31 == 31 || Auth::user()->id_setor34 == 31 || Auth::user()->id_setor33 == 31 || 
                            Auth::user()->id_setor34 == 31 || Auth::user()->id_setor35 == 31 || Auth::user()->id_setor36 == 31 || 
                            Auth::user()->id_setor37 == 31 || Auth::user()->id_setor38 == 31)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 35 || Auth::user()->id_setor2 == 35 || Auth::user()->id_setor3 == 35 || 
                            Auth::user()->id_setor4 == 35 || Auth::user()->id_setor5 == 35 || Auth::user()->id_setor6 == 35 || 
                            Auth::user()->id_setor7 == 35 || Auth::user()->id_setor8 == 35 || Auth::user()->id_setor9 == 35 || 
                            Auth::user()->id_setor10 == 35 || Auth::user()->id_setor11 == 35 || Auth::user()->id_setor12 == 35 || 
                            Auth::user()->id_setor13 == 35 || Auth::user()->id_setor14 == 35 || Auth::user()->id_setor15 == 35 || 
                            Auth::user()->id_setor16 == 35 || Auth::user()->id_setor17 == 35 || Auth::user()->id_setor18 == 35 || 
                            Auth::user()->id_setor19 == 35 || Auth::user()->id_setor20 == 35 || Auth::user()->id_setor21 == 35 || 
                            Auth::user()->id_setor22 == 35 || Auth::user()->id_setor23 == 35 || Auth::user()->id_setor24 == 35 || 
                            Auth::user()->id_setor25 == 35 || Auth::user()->id_setor26 == 35 || Auth::user()->id_setor27 == 35 || 
                            Auth::user()->id_setor28 == 35 || Auth::user()->id_setor29 == 35 || Auth::user()->id_setor30 == 35 || 
                            Auth::user()->id_setor31 == 35 || Auth::user()->id_setor34 == 35 || Auth::user()->id_setor33 == 35 || 
                            Auth::user()->id_setor34 == 35 || Auth::user()->id_setor35 == 35 || Auth::user()->id_setor36 == 35 || 
                            Auth::user()->id_setor37 == 35 || Auth::user()->id_setor38 == 35)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 10 || Auth::user()->id_setor2 == 10 || Auth::user()->id_setor3 == 10 || 
                            Auth::user()->id_setor4 == 10 || Auth::user()->id_setor5 == 10 || Auth::user()->id_setor6 == 10 || 
                            Auth::user()->id_setor7 == 10 || Auth::user()->id_setor8 == 10 || Auth::user()->id_setor9 == 10 || 
                            Auth::user()->id_setor10 == 10 || Auth::user()->id_setor11 == 10 || Auth::user()->id_setor12 == 10 || 
                            Auth::user()->id_setor13 == 10 || Auth::user()->id_setor14 == 10 || Auth::user()->id_setor15 == 10 || 
                            Auth::user()->id_setor16 == 10 || Auth::user()->id_setor17 == 10 || Auth::user()->id_setor18 == 10 || 
                            Auth::user()->id_setor19 == 10 || Auth::user()->id_setor20 == 10 || Auth::user()->id_setor21 == 10 || 
                            Auth::user()->id_setor22 == 10 || Auth::user()->id_setor23 == 10 || Auth::user()->id_setor24 == 10 || 
                            Auth::user()->id_setor25 == 10 || Auth::user()->id_setor26 == 10 || Auth::user()->id_setor27 == 10 || 
                            Auth::user()->id_setor28 == 10 || Auth::user()->id_setor29 == 10 || Auth::user()->id_setor30 == 10 || 
                            Auth::user()->id_setor31 == 10 || Auth::user()->id_setor34 == 10 || Auth::user()->id_setor33 == 10 || 
                            Auth::user()->id_setor34 == 10 || Auth::user()->id_setor35 == 10 || Auth::user()->id_setor36 == 10 || 
                            Auth::user()->id_setor37 == 10 || Auth::user()->id_setor38 == 10)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 12 || Auth::user()->id_setor2 == 12 || Auth::user()->id_setor3 == 12 || 
                            Auth::user()->id_setor4 == 12 || Auth::user()->id_setor5 == 12 || Auth::user()->id_setor6 == 12 || 
                            Auth::user()->id_setor7 == 12 || Auth::user()->id_setor8 == 12 || Auth::user()->id_setor9 == 12 || 
                            Auth::user()->id_setor10 == 12 || Auth::user()->id_setor11 == 12 || Auth::user()->id_setor12 == 12 || 
                            Auth::user()->id_setor13 == 12 || Auth::user()->id_setor14 == 12 || Auth::user()->id_setor15 == 12 || 
                            Auth::user()->id_setor16 == 12 || Auth::user()->id_setor17 == 12 || Auth::user()->id_setor18 == 12 || 
                            Auth::user()->id_setor19 == 12 || Auth::user()->id_setor20 == 12 || Auth::user()->id_setor21 == 12 || 
                            Auth::user()->id_setor22 == 12 || Auth::user()->id_setor23 == 12 || Auth::user()->id_setor24 == 12 || 
                            Auth::user()->id_setor25 == 12 || Auth::user()->id_setor26 == 12 || Auth::user()->id_setor27 == 12 || 
                            Auth::user()->id_setor28 == 12 || Auth::user()->id_setor29 == 12 || Auth::user()->id_setor30 == 12 || 
                            Auth::user()->id_setor31 == 12 || Auth::user()->id_setor34 == 12 || Auth::user()->id_setor33 == 12 || 
                            Auth::user()->id_setor34 == 12 || Auth::user()->id_setor35 == 12 || Auth::user()->id_setor36 == 12 || 
                            Auth::user()->id_setor37 == 12 || Auth::user()->id_setor38 == 12)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 11 || Auth::user()->id_setor2 == 11 || Auth::user()->id_setor3 == 11 || 
                            Auth::user()->id_setor4 == 11 || Auth::user()->id_setor5 == 11 || Auth::user()->id_setor6 == 11 || 
                            Auth::user()->id_setor7 == 11 || Auth::user()->id_setor8 == 11 || Auth::user()->id_setor9 == 11 || 
                            Auth::user()->id_setor10 == 11 || Auth::user()->id_setor11 == 11 || Auth::user()->id_setor12 == 11 || 
                            Auth::user()->id_setor13 == 11 || Auth::user()->id_setor14 == 11 || Auth::user()->id_setor15 == 11 || 
                            Auth::user()->id_setor16 == 11 || Auth::user()->id_setor17 == 11 || Auth::user()->id_setor18 == 11 || 
                            Auth::user()->id_setor19 == 11 || Auth::user()->id_setor20 == 11 || Auth::user()->id_setor21 == 11 || 
                            Auth::user()->id_setor22 == 11 || Auth::user()->id_setor23 == 11 || Auth::user()->id_setor24 == 11 || 
                            Auth::user()->id_setor25 == 11 || Auth::user()->id_setor26 == 11 || Auth::user()->id_setor27 == 11 || 
                            Auth::user()->id_setor28 == 11 || Auth::user()->id_setor29 == 11 || Auth::user()->id_setor30 == 11 || 
                            Auth::user()->id_setor31 == 11 || Auth::user()->id_setor34 == 11 || Auth::user()->id_setor33 == 11 || 
                            Auth::user()->id_setor34 == 11 || Auth::user()->id_setor35 == 11 || Auth::user()->id_setor36 == 11 || 
                            Auth::user()->id_setor37 == 11 || Auth::user()->id_setor38 == 11)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 38 || Auth::user()->id_setor2 == 38 || Auth::user()->id_setor3 == 38 || 
                            Auth::user()->id_setor4 == 38 || Auth::user()->id_setor5 == 38 || Auth::user()->id_setor6 == 38 || 
                            Auth::user()->id_setor7 == 38 || Auth::user()->id_setor8 == 38 || Auth::user()->id_setor9 == 38 || 
                            Auth::user()->id_setor10 == 38 || Auth::user()->id_setor11 == 38 || Auth::user()->id_setor12 == 38 || 
                            Auth::user()->id_setor13 == 38 || Auth::user()->id_setor14 == 38 || Auth::user()->id_setor15 == 38 || 
                            Auth::user()->id_setor16 == 38 || Auth::user()->id_setor17 == 38 || Auth::user()->id_setor18 == 38 || 
                            Auth::user()->id_setor19 == 38 || Auth::user()->id_setor20 == 38 || Auth::user()->id_setor21 == 38 || 
                            Auth::user()->id_setor22 == 38 || Auth::user()->id_setor23 == 38 || Auth::user()->id_setor24 == 38 || 
                            Auth::user()->id_setor25 == 38 || Auth::user()->id_setor26 == 38 || Auth::user()->id_setor27 == 38 || 
                            Auth::user()->id_setor28 == 38 || Auth::user()->id_setor29 == 38 || Auth::user()->id_setor30 == 38 || 
                            Auth::user()->id_setor31 == 38 || Auth::user()->id_setor34 == 38 || Auth::user()->id_setor33 == 38 || 
                            Auth::user()->id_setor34 == 38 || Auth::user()->id_setor35 == 38 || Auth::user()->id_setor36 == 38 || 
                            Auth::user()->id_setor37 == 38 || Auth::user()->id_setor38 == 38)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 13 || Auth::user()->id_setor2 == 13 || Auth::user()->id_setor3 == 13 || 
                            Auth::user()->id_setor4 == 13 || Auth::user()->id_setor5 == 13 || Auth::user()->id_setor6 == 13 || 
                            Auth::user()->id_setor7 == 13 || Auth::user()->id_setor8 == 13 || Auth::user()->id_setor9 == 13 || 
                            Auth::user()->id_setor10 == 13 || Auth::user()->id_setor11 == 13 || Auth::user()->id_setor12 == 13 || 
                            Auth::user()->id_setor13 == 13 || Auth::user()->id_setor14 == 13 || Auth::user()->id_setor15 == 13 || 
                            Auth::user()->id_setor16 == 13 || Auth::user()->id_setor17 == 13 || Auth::user()->id_setor18 == 13 || 
                            Auth::user()->id_setor19 == 13 || Auth::user()->id_setor20 == 13 || Auth::user()->id_setor21 == 13 || 
                            Auth::user()->id_setor22 == 13 || Auth::user()->id_setor23 == 13 || Auth::user()->id_setor24 == 13 || 
                            Auth::user()->id_setor25 == 13 || Auth::user()->id_setor26 == 13 || Auth::user()->id_setor27 == 13 || 
                            Auth::user()->id_setor28 == 13 || Auth::user()->id_setor29 == 13 || Auth::user()->id_setor30 == 13 || 
                            Auth::user()->id_setor31 == 13 || Auth::user()->id_setor34 == 13 || Auth::user()->id_setor33 == 13 || 
                            Auth::user()->id_setor34 == 13 || Auth::user()->id_setor35 == 13 || Auth::user()->id_setor36 == 13 || 
                            Auth::user()->id_setor37 == 13 || Auth::user()->id_setor38 == 13)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 14 || Auth::user()->id_setor2 == 14 || Auth::user()->id_setor3 == 14 || 
                            Auth::user()->id_setor4 == 14 || Auth::user()->id_setor5 == 14 || Auth::user()->id_setor6 == 14 || 
                            Auth::user()->id_setor7 == 14 || Auth::user()->id_setor8 == 14 || Auth::user()->id_setor9 == 14 || 
                            Auth::user()->id_setor10 == 14 || Auth::user()->id_setor11 == 14 || Auth::user()->id_setor12 == 14 || 
                            Auth::user()->id_setor13 == 14 || Auth::user()->id_setor14 == 14 || Auth::user()->id_setor15 == 14 || 
                            Auth::user()->id_setor16 == 14 || Auth::user()->id_setor17 == 14 || Auth::user()->id_setor18 == 14 || 
                            Auth::user()->id_setor19 == 14 || Auth::user()->id_setor20 == 14 || Auth::user()->id_setor21 == 14 || 
                            Auth::user()->id_setor22 == 14 || Auth::user()->id_setor23 == 14 || Auth::user()->id_setor24 == 14 || 
                            Auth::user()->id_setor25 == 14 || Auth::user()->id_setor26 == 14 || Auth::user()->id_setor27 == 14 || 
                            Auth::user()->id_setor28 == 14 || Auth::user()->id_setor29 == 14 || Auth::user()->id_setor30 == 14 || 
                            Auth::user()->id_setor31 == 14 || Auth::user()->id_setor34 == 14 || Auth::user()->id_setor33 == 14 || 
                            Auth::user()->id_setor34 == 14 || Auth::user()->id_setor35 == 14 || Auth::user()->id_setor36 == 14 || 
                            Auth::user()->id_setor37 == 14 || Auth::user()->id_setor38 == 14)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 15 || Auth::user()->id_setor2 == 15 || Auth::user()->id_setor3 == 15 || 
                            Auth::user()->id_setor4 == 15 || Auth::user()->id_setor5 == 15 || Auth::user()->id_setor6 == 15 || 
                            Auth::user()->id_setor7 == 15 || Auth::user()->id_setor8 == 15 || Auth::user()->id_setor9 == 15 || 
                            Auth::user()->id_setor10 == 15 || Auth::user()->id_setor11 == 15 || Auth::user()->id_setor12 == 15 || 
                            Auth::user()->id_setor13 == 15 || Auth::user()->id_setor14 == 15 || Auth::user()->id_setor15 == 15 || 
                            Auth::user()->id_setor16 == 15 || Auth::user()->id_setor17 == 15 || Auth::user()->id_setor18 == 15 || 
                            Auth::user()->id_setor19 == 15 || Auth::user()->id_setor20 == 15 || Auth::user()->id_setor21 == 15 || 
                            Auth::user()->id_setor22 == 15 || Auth::user()->id_setor23 == 15 || Auth::user()->id_setor24 == 15 || 
                            Auth::user()->id_setor25 == 15 || Auth::user()->id_setor26 == 15 || Auth::user()->id_setor27 == 15 || 
                            Auth::user()->id_setor28 == 15 || Auth::user()->id_setor29 == 15 || Auth::user()->id_setor30 == 15 || 
                            Auth::user()->id_setor31 == 15 || Auth::user()->id_setor34 == 15 || Auth::user()->id_setor33 == 15 || 
                            Auth::user()->id_setor34 == 15 || Auth::user()->id_setor35 == 15 || Auth::user()->id_setor36 == 15 || 
                            Auth::user()->id_setor37 == 15 || Auth::user()->id_setor38 == 15)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 16 || Auth::user()->id_setor2 == 16 || Auth::user()->id_setor3 == 16 || 
                            Auth::user()->id_setor4 == 16 || Auth::user()->id_setor5 == 16 || Auth::user()->id_setor6 == 16 || 
                            Auth::user()->id_setor7 == 16 || Auth::user()->id_setor8 == 16 || Auth::user()->id_setor9 == 16 || 
                            Auth::user()->id_setor10 == 16 || Auth::user()->id_setor11 == 16 || Auth::user()->id_setor12 == 16 || 
                            Auth::user()->id_setor13 == 16 || Auth::user()->id_setor14 == 16 || Auth::user()->id_setor15 == 16 || 
                            Auth::user()->id_setor16 == 16 || Auth::user()->id_setor17 == 16 || Auth::user()->id_setor18 == 16 || 
                            Auth::user()->id_setor19 == 16 || Auth::user()->id_setor20 == 16 || Auth::user()->id_setor21 == 16 || 
                            Auth::user()->id_setor22 == 16 || Auth::user()->id_setor23 == 16 || Auth::user()->id_setor24 == 16 || 
                            Auth::user()->id_setor25 == 16 || Auth::user()->id_setor26 == 16 || Auth::user()->id_setor27 == 16 || 
                            Auth::user()->id_setor28 == 16 || Auth::user()->id_setor29 == 16 || Auth::user()->id_setor30 == 16 || 
                            Auth::user()->id_setor31 == 16 || Auth::user()->id_setor34 == 16 || Auth::user()->id_setor33 == 16 || 
                            Auth::user()->id_setor34 == 16 || Auth::user()->id_setor35 == 16 || Auth::user()->id_setor36 == 16 || 
                            Auth::user()->id_setor37 == 16 || Auth::user()->id_setor38 == 16)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 17 || Auth::user()->id_setor2 == 17 || Auth::user()->id_setor3 == 17 || 
                            Auth::user()->id_setor4 == 17 || Auth::user()->id_setor5 == 17 || Auth::user()->id_setor6 == 17 || 
                            Auth::user()->id_setor7 == 17 || Auth::user()->id_setor8 == 17 || Auth::user()->id_setor9 == 17 || 
                            Auth::user()->id_setor10 == 17 || Auth::user()->id_setor11 == 17 || Auth::user()->id_setor12 == 17 || 
                            Auth::user()->id_setor13 == 17 || Auth::user()->id_setor14 == 17 || Auth::user()->id_setor15 == 17 || 
                            Auth::user()->id_setor16 == 17 || Auth::user()->id_setor17 == 17 || Auth::user()->id_setor18 == 17 || 
                            Auth::user()->id_setor19 == 17 || Auth::user()->id_setor20 == 17 || Auth::user()->id_setor21 == 17 || 
                            Auth::user()->id_setor22 == 17 || Auth::user()->id_setor23 == 17 || Auth::user()->id_setor24 == 17 || 
                            Auth::user()->id_setor25 == 17 || Auth::user()->id_setor26 == 17 || Auth::user()->id_setor27 == 17 || 
                            Auth::user()->id_setor28 == 17 || Auth::user()->id_setor29 == 17 || Auth::user()->id_setor30 == 17 || 
                            Auth::user()->id_setor31 == 17 || Auth::user()->id_setor34 == 17 || Auth::user()->id_setor33 == 17 || 
                            Auth::user()->id_setor34 == 17 || Auth::user()->id_setor35 == 17 || Auth::user()->id_setor36 == 17 || 
                            Auth::user()->id_setor37 == 17 || Auth::user()->id_setor38 == 17)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif
                        
                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 18 || Auth::user()->id_setor2 == 18 || Auth::user()->id_setor3 == 18 || 
                            Auth::user()->id_setor4 == 18 || Auth::user()->id_setor5 == 18 || Auth::user()->id_setor6 == 18 || 
                            Auth::user()->id_setor7 == 18 || Auth::user()->id_setor8 == 18 || Auth::user()->id_setor9 == 18 || 
                            Auth::user()->id_setor10 == 18 || Auth::user()->id_setor11 == 18 || Auth::user()->id_setor12 == 18 || 
                            Auth::user()->id_setor13 == 18 || Auth::user()->id_setor14 == 18 || Auth::user()->id_setor15 == 18 || 
                            Auth::user()->id_setor16 == 18 || Auth::user()->id_setor17 == 18 || Auth::user()->id_setor18 == 18 || 
                            Auth::user()->id_setor19 == 18 || Auth::user()->id_setor20 == 18 || Auth::user()->id_setor21 == 18 || 
                            Auth::user()->id_setor22 == 18 || Auth::user()->id_setor23 == 18 || Auth::user()->id_setor24 == 18 || 
                            Auth::user()->id_setor25 == 18 || Auth::user()->id_setor26 == 18 || Auth::user()->id_setor27 == 18 || 
                            Auth::user()->id_setor28 == 18 || Auth::user()->id_setor29 == 18 || Auth::user()->id_setor30 == 18 || 
                            Auth::user()->id_setor31 == 18 || Auth::user()->id_setor34 == 18 || Auth::user()->id_setor33 == 18 || 
                            Auth::user()->id_setor34 == 18 || Auth::user()->id_setor35 == 18 || Auth::user()->id_setor36 == 18 || 
                            Auth::user()->id_setor37 == 18 || Auth::user()->id_setor38 == 18)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 19 || Auth::user()->id_setor2 == 19 || Auth::user()->id_setor3 == 19 || 
                            Auth::user()->id_setor4 == 19 || Auth::user()->id_setor5 == 19 || Auth::user()->id_setor6 == 19 || 
                            Auth::user()->id_setor7 == 19 || Auth::user()->id_setor8 == 19 || Auth::user()->id_setor9 == 19 || 
                            Auth::user()->id_setor10 == 19 || Auth::user()->id_setor11 == 19 || Auth::user()->id_setor12 == 19 || 
                            Auth::user()->id_setor13 == 19 || Auth::user()->id_setor14 == 19 || Auth::user()->id_setor15 == 19 || 
                            Auth::user()->id_setor16 == 19 || Auth::user()->id_setor17 == 19 || Auth::user()->id_setor18 == 19 || 
                            Auth::user()->id_setor19 == 19 || Auth::user()->id_setor20 == 19 || Auth::user()->id_setor21 == 19 || 
                            Auth::user()->id_setor22 == 19 || Auth::user()->id_setor23 == 19 || Auth::user()->id_setor24 == 19 || 
                            Auth::user()->id_setor25 == 19 || Auth::user()->id_setor26 == 19 || Auth::user()->id_setor27 == 19 || 
                            Auth::user()->id_setor28 == 19 || Auth::user()->id_setor29 == 19 || Auth::user()->id_setor30 == 19 || 
                            Auth::user()->id_setor31 == 19 || Auth::user()->id_setor34 == 19 || Auth::user()->id_setor33 == 19 || 
                            Auth::user()->id_setor34 == 19 || Auth::user()->id_setor35 == 19 || Auth::user()->id_setor36 == 19 || 
                            Auth::user()->id_setor37 == 19 || Auth::user()->id_setor38 == 19)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 20 || Auth::user()->id_setor2 == 20 || Auth::user()->id_setor3 == 20 || 
                            Auth::user()->id_setor4 == 20 || Auth::user()->id_setor5 == 20 || Auth::user()->id_setor6 == 20 || 
                            Auth::user()->id_setor7 == 20 || Auth::user()->id_setor8 == 20 || Auth::user()->id_setor9 == 20 || 
                            Auth::user()->id_setor10 == 20 || Auth::user()->id_setor11 == 20 || Auth::user()->id_setor12 == 20 || 
                            Auth::user()->id_setor13 == 20 || Auth::user()->id_setor14 == 20 || Auth::user()->id_setor15 == 20 || 
                            Auth::user()->id_setor16 == 20 || Auth::user()->id_setor17 == 20 || Auth::user()->id_setor18 == 20 || 
                            Auth::user()->id_setor19 == 20 || Auth::user()->id_setor20 == 20 || Auth::user()->id_setor21 == 20 || 
                            Auth::user()->id_setor22 == 20 || Auth::user()->id_setor23 == 20 || Auth::user()->id_setor24 == 20 || 
                            Auth::user()->id_setor25 == 20 || Auth::user()->id_setor26 == 20 || Auth::user()->id_setor27 == 20 || 
                            Auth::user()->id_setor28 == 20 || Auth::user()->id_setor29 == 20 || Auth::user()->id_setor30 == 20 || 
                            Auth::user()->id_setor31 == 20 || Auth::user()->id_setor34 == 20 || Auth::user()->id_setor33 == 20 || 
                            Auth::user()->id_setor34 == 20 || Auth::user()->id_setor35 == 20 || Auth::user()->id_setor36 == 20 || 
                            Auth::user()->id_setor37 == 20 || Auth::user()->id_setor38 == 20)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 22 || Auth::user()->id_setor2 == 22 || Auth::user()->id_setor3 == 22 || 
                            Auth::user()->id_setor4 == 22 || Auth::user()->id_setor5 == 22 || Auth::user()->id_setor6 == 22 || 
                            Auth::user()->id_setor7 == 22 || Auth::user()->id_setor8 == 22 || Auth::user()->id_setor9 == 22 || 
                            Auth::user()->id_setor10 == 22 || Auth::user()->id_setor11 == 22 || Auth::user()->id_setor12 == 22 || 
                            Auth::user()->id_setor13 == 22 || Auth::user()->id_setor14 == 22 || Auth::user()->id_setor15 == 22 || 
                            Auth::user()->id_setor16 == 22 || Auth::user()->id_setor17 == 22 || Auth::user()->id_setor18 == 22 || 
                            Auth::user()->id_setor19 == 22 || Auth::user()->id_setor20 == 22 || Auth::user()->id_setor21 == 22 || 
                            Auth::user()->id_setor22 == 22 || Auth::user()->id_setor23 == 22 || Auth::user()->id_setor24 == 22 || 
                            Auth::user()->id_setor25 == 22 || Auth::user()->id_setor26 == 22 || Auth::user()->id_setor27 == 22 || 
                            Auth::user()->id_setor28 == 22 || Auth::user()->id_setor29 == 22 || Auth::user()->id_setor30 == 22 || 
                            Auth::user()->id_setor31 == 22 || Auth::user()->id_setor34 == 22 || Auth::user()->id_setor33 == 22 || 
                            Auth::user()->id_setor34 == 22 || Auth::user()->id_setor35 == 22 || Auth::user()->id_setor36 == 22 || 
                            Auth::user()->id_setor37 == 22 || Auth::user()->id_setor38 == 22)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 1 || Auth::user()->id_setor2 == 1 || Auth::user()->id_setor3 == 1 || 
                            Auth::user()->id_setor4 == 1 || Auth::user()->id_setor5 == 1 || Auth::user()->id_setor6 == 1 || 
                            Auth::user()->id_setor7 == 1 || Auth::user()->id_setor8 == 1 || Auth::user()->id_setor9 == 1 || 
                            Auth::user()->id_setor10 == 1 || Auth::user()->id_setor11 == 1 || Auth::user()->id_setor12 == 1 || 
                            Auth::user()->id_setor13 == 1 || Auth::user()->id_setor14 == 1 || Auth::user()->id_setor15 == 1 || 
                            Auth::user()->id_setor16 == 1 || Auth::user()->id_setor17 == 1 || Auth::user()->id_setor18 == 1 || 
                            Auth::user()->id_setor19 == 1 || Auth::user()->id_setor20 == 1 || Auth::user()->id_setor21 == 1 || 
                            Auth::user()->id_setor22 == 1 || Auth::user()->id_setor23 == 1 || Auth::user()->id_setor24 == 1 || 
                            Auth::user()->id_setor25 == 1 || Auth::user()->id_setor26 == 1 || Auth::user()->id_setor27 == 1 || 
                            Auth::user()->id_setor28 == 1 || Auth::user()->id_setor29 == 1 || Auth::user()->id_setor30 == 1 || 
                            Auth::user()->id_setor31 == 1 || Auth::user()->id_setor34 == 1 || Auth::user()->id_setor33 == 1 || 
                            Auth::user()->id_setor34 == 1 || Auth::user()->id_setor35 == 1 || Auth::user()->id_setor36 == 1 || 
                            Auth::user()->id_setor37 == 1 || Auth::user()->id_setor38 == 1)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

                        @if(Auth::check() && ((Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1) && (Auth::user()->id_setor1 == 23 || Auth::user()->id_setor2 == 23 || Auth::user()->id_setor3 == 23 || 
                            Auth::user()->id_setor4 == 23 || Auth::user()->id_setor5 == 23 || Auth::user()->id_setor6 == 23 || 
                            Auth::user()->id_setor7 == 23 || Auth::user()->id_setor8 == 23 || Auth::user()->id_setor9 == 23 || 
                            Auth::user()->id_setor10 == 23 || Auth::user()->id_setor11 == 23 || Auth::user()->id_setor12 == 23 || 
                            Auth::user()->id_setor13 == 23 || Auth::user()->id_setor14 == 23 || Auth::user()->id_setor15 == 23 || 
                            Auth::user()->id_setor16 == 23 || Auth::user()->id_setor17 == 23 || Auth::user()->id_setor18 == 23 || 
                            Auth::user()->id_setor19 == 23 || Auth::user()->id_setor20 == 23 || Auth::user()->id_setor21 == 23 || 
                            Auth::user()->id_setor22 == 23 || Auth::user()->id_setor23 == 23 || Auth::user()->id_setor24 == 23 || 
                            Auth::user()->id_setor25 == 23 || Auth::user()->id_setor26 == 23 || Auth::user()->id_setor27 == 23 || 
                            Auth::user()->id_setor28 == 23 || Auth::user()->id_setor29 == 23 || Auth::user()->id_setor30 == 23 || 
                            Auth::user()->id_setor31 == 23 || Auth::user()->id_setor34 == 23 || Auth::user()->id_setor33 == 23 || 
                            Auth::user()->id_setor34 == 23 || Auth::user()->id_setor35 == 23 || Auth::user()->id_setor36 == 23 || 
                            Auth::user()->id_setor37 == 23 || Auth::user()->id_setor38 == 23)) || (Auth::user()->id_permission == 1 || 
                            Auth::user()->id_permission == 2))
                            <h2> ARQUIVOS: </h2><br>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Versão</th>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                            <th>ID User</th>
                                            <th>ID Empresa</th>
                                            <th>ID Setor</th>
                                            <th>ID Macro</th>
                                            <th>Ativo</th>
                                            <th>Aprovação</th>
                                        @endif
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($files as $file)

                                    @if(Auth::check() && Auth::user()->id_permission == 3 || Auth::user()->permission == NULL)
                                        @if($file->ativo == 0 || $file->aprovacao == 0 || $file->aprovacao == 1)
                                            @continue
                                        @endif
                                    @endif

                                    <tr>
                                        <td>{{ $file->codigo }}</td>
                                        <td>{{ $file->versao }}</td>
                                        @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
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
                                                    $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32];
                                                    $nomesSetores = collect($setoresIds)
                                                        ->filter() // Remove IDs nulos
                                                        ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                                                        ->join(', '); // Junta os nomes com vírgulas
                                                @endphp
                                                {{$nomesSetores ?: 'Nenhum setor definido'}}
                                            </td>
                                            <td>{{ $file->macro?->name_macro ?? 'Macro não definida' }}</td>
                                            <td>{{ $file->ativo == 1 ? 'Sim' : 'Não' }}</td>
                                            <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                                <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                                <a id="button_excluir" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                            @endif
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
                        @else
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Você não possui acesso a esta pasta!
                            </h2>
                        @endif

--}}