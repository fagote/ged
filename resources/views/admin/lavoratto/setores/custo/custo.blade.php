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
                    Auth::user()->id_setor31 == 3 || Auth::user()->id_setor32 == 3 || Auth::user()->id_setor33 == 3 || 
                    Auth::user()->id_setor34 == 3 || Auth::user()->id_setor35 == 3 || Auth::user()->id_setor36 == 3 || 
                    Auth::user()->id_setor37 == 3 || Auth::user()->id_setor38 == 3)) || (Auth::user()->id_permission == 1 || 
                    Auth::user()->id_permission == 2))

                                    

                    <h2> LAVORATTO > CUSTO </h2><br>
    
    
                    <ul class="file-system">
    
                        <li class="folder">
                            <a href="{{route('lavorattoCustoFormulario.index')}}" class="folder-link">
                                <img src="{{asset('images/icone_pasta.png')}}" alt="icone pasta" style="width: 20px; height: 20px; margin-right: 10px">
                                FORMULARIO</a>
                        </li>
                         
                        <li class="folder">
                            <a href="{{route('lavorattoCustoRegistro.index')}}" class="folder-link">
                                <img src="{{asset('images/icone_pasta.png')}}" alt="icone pasta" style="width: 20px; height: 20px; margin-right: 10px">
                                REGISTRO</a>
                        </li>
                        
                        <li class="folder">
                            <a href="{{route('lavorattoCustoProcedimento.index')}}" class="folder-link">
                                <img src="{{asset('images/icone_pasta.png')}}" alt="icone pasta" style="width: 20px; height: 20px; margin-right: 10px">
                                PROCEDIMENTO</a>
                        </li>
    
                        <li class="folder">
                            <a href="{{route('lavorattoCustoInstrucao.index')}}" class="folder-link">
                                <img src="{{asset('images/icone_pasta.png')}}" alt="icone pasta" style="width: 20px; height: 20px; margin-right: 10px">
                                INSTRUCAO</a>
                        </li>
                    </ul>
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

            font-weight: bold;
            color: #2c3e50;
            display: flex;
            align-items: center;

            @media(prefers-color-scheme: dark){
                color: white;
            }

        }

        .file {
            color: #16a085;
        }

        .folder-link{
            display: inline-flex;
            align-items: center;
        }

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>