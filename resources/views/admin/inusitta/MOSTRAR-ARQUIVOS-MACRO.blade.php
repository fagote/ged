<x-icon></x-icon>

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
                    <h2> ARQUIVOS: </h2><br>


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
                                <td>{{ $file->aprovacao == 0 ? 'Reprovado' : ($file->aprovacao == 1 ? 'Aguardando' : 'Aprovado') }}</td>
                                <td>
                                        <a href="{{ route('files.edit', $file->id) }}" class="button">Edit</a>
                                        <a href="{{ route('files.view', $file->id) }}" target="_blank" class="button">Visualizar</a>
                                        <a href="atividade" class="button">Atividade</a>
                                        <a href="aprovacao" class="button">Aprovação</a>
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