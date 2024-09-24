
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
                    <h2> Arquivos: </h2><br>

                    <table>
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Path</th>
                                <th>Versão</th>
                                <th>ID User</th>
                                <th>ID Macro</th>
                                <th>ID Setor</th>
                                <th>ID Empresa</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($files as $file)
                            <tr>
                                <td>{{$file->codigo}}</td>
                                <td>{{$file->file_path}}</td>
                                <td>{{$file->versao}}</td>
                                <td>{{$file->user->name}}</td>
                                <td>{{$file->macro->name_macro}}</td>
                                <td>{{$file->sector->name_setor}}</td>
                                <td>{{$file->company->name_empresa}}</td>
                                <td>
                                    <a id="button1" href="{{ route('files.edit', $file->id) }}">Edit</a>
                                    <a id="button1" href="{{ route('files.show', $file->id) }}">Excluir</a>
                                    <a id="button1" href="{{ route('files.view', $file->id) }}" target="_blank">Visualizar</a>
                                </td>
                            </tr>

                        

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