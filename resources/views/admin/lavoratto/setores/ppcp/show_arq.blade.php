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
                    Auth::user()->id_setor31 == 14 || Auth::user()->id_setor32 == 14 || Auth::user()->id_setor33 == 14 || 
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
                                <a href="javascript:void(0)" onclick="openFilePopup('{{ route('files.view', $file->id) }}')" class="button">Visualizar</a>

                                <script>
                                    function openFilePopup(url) {
                                        // Cria uma nova janela pop-up
                                        var popup = window.open('', 'filePopup', 'width=800,height=600,scrollbars=yes,resizable=yes');

                                        // Adiciona um iframe dentro da janela pop-up
                                        popup.document.write('<html><head><title>Visualizar Arquivo</title></head><body>');
                                        popup.document.write('<iframe src="' + url + '" width="100%" height="100%" frameborder="0"></iframe>');
                                        popup.document.write('</body></html>');

                                        // Fecha a escrita para carregar o conteúdo
                                        popup.document.close();
                                    }
                                </script>
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


<x-footer> </x-footer>


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

 