
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

                    @can('is-admin')

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

                        <!-- Formulário de upload de arquivos -->
                        <form action="{{ route('users.upload', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Token CSRF para segurança -->
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300" for="files">Selecione os arquivos</label>
                                <input type="file" name="files[]" id="files" multiple class="mt-1 block w-full" accept=".pdf,.xlsx,.ods">
                                @error('files.*')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Enviar Arquivos') }}
                                </x-primary-button>
                            </div>
                        </form> 

                        


                    @else   
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            O seu usuário está logado!
                        </h2>
                    @endcan

                    

                </div>
            </div>
        </div>
    </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="uploaded-files">
                        <h2>Arquivos Enviados:</h2>
                    
                         {{-- @if($files->isEmpty())
                            <p>Nenhum arquivo enviado.</p>
                        @else
                            <ul>
                                @foreach($files as $file)
                                    <li>
                                        <a href="{{ asset('storage/app/public/user_files' . $file->file_path) }}" target="_blank">
                                            {{ basename($file->file_path) }} <!-- Mostra o nome do arquivo -->
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>            --}}


                    

                    
                    

                </div>
            </div>
        </div>

</x-app-layout>
