<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Sistema de Gerenciamento de Arquivos') }} 
            </h2>

            <!--=================================================-->
            <!--
            @can('is-admin')
                <span class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    <a href="{{ route('users.index') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Usuários') }}
                    </a>

                    <a href="{{ route('users.index') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Empresas') }}
                    </a>

                    <a href="{{ route('users.index') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Departamentos') }}
                    </a>
                </span>
            @endcan
            -->
            <!--=================================================-->

        </div>
    </x-slot>
    

    
    @can('is-admin')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Olá  {{ Auth::user()->name }}, você tem acesso de administrador! Faça upload do seu arquivo no campo abaixo!
                    </div>

                    <div>

                        <form action="{{ route('users.upload', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="files">Escolha os arquivos: </label>
                                <input type="file" id="files" name="files[]" accept=".pdf,.xlsx,.ods" required>
                            </div>
                            
                            <div>
                                <label for="versao">Número da versão de seu arquivo: </label>
                                <input type="number" name="versão" id="versao" min="1" required>
                            </div>
                            <button id="button1" type="submit">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @else
        <div style="color: white;">Olá, {{ Auth::user()->name }}, você pode apenas visualizar os arquivos abaixo!</div>
            

    @endcan
    
    

    <!--
    @if ('is-admin')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Olá  {{ Auth::user()->name }}, você tem acesso de administrador! Faça upload do seu arquivo no campo abaixo!
                    </div>

                    <div>

                        <form action="{{ route('users.upload', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="files">Escolha os arquivos: </label>
                                <input type="file" id="files" name="files[]" accept=".pdf,.xlsx,.ods" required>
                            </div>
                            
                            <div>
                                <label for="versao">Número da versão de seu arquivo: </label>
                                <input type="number" name="versão" id="versao" min="1" required>
                            </div>
                            <button id="button1" type="submit">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        
    @else
        <div>Olá, {{ Auth::user()->name }}, você pode apenas visualizar os arquivos abaixo!</div>
        
    @endif
    -->

</x-app-layout>

<style>

    #button1 {
        color: white !important; /* Força a cor do texto dos links como branco */
        margin-right: 10px; /* Margem para links */
        text-decoration: none; /* Remove o sublinhado dos links */
        border: 2px solid white; /* Adiciona uma borda branca aos links */
        padding: 4px 8px; /* Adiciona algum espaçamento interno */
        border-radius: 4px; /* Adiciona bordas arredondadas */
        display: inline-block; /* Garante que o padding e a borda sejam aplicados corretamente */
        transition: background-color 0.3s, color 0.3s; /* Adiciona uma transição suave para hover */
    }

    #button1:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Cor de fundo levemente branca no hover */
        color: white; /* Garante que a cor do texto continue branca */
        text-decoration: underline; /* Sublinha o link ao passar o mouse */
    }

    #versao{
        width: 70px;
        height: 30px;
    }

    label{
        color:white;
    }

</style>
