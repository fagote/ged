
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
                        <form action="{{ route('files.upload', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h2>Empresas:</h2><br>

                    <a href="x">
                        <button class="glow-on-hover" type="button">Inusittá</button>
                    </a>
                        
                    <a href="x2">
                        <button  class="glow-on-hover" type="button">Microsoft</button>
                    </a>
                    <a href="x3">
                        <button  class="glow-on-hover" type="button">Apple</button>
                    </a>
                    <a href="x4">
                        <button  class="glow-on-hover" type="button">Intel</button>
                    </a>

                        

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

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>