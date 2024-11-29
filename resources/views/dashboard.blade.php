<x-icon></x-icon>

<title>File Manager</title>
<x-app-layout>
    


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Olá {{ auth()->user()->name }} &#128075; !
            @can('is-admin')
                Você possui perfil administrador!
            @endcan
        </h2>
    </x-slot>

    <div class="py-12">
        
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="uploaded-files">
                
                <h2>Empresas:</h2><br>
                
                <div class="button-container">
                    <!-- Condição para limitar o acesso das pessoas nas empresas -->
                    <!-- A empresa com id 999 é do usuário master onde ele tem acesso a todas as empresas --> 
                    @if(Auth::check() && Auth::user()->id_empresa1 == 5 || Auth::user()->id_empresa2 == 5 || Auth::user()->id_empresa3 == 5 || Auth::user()->id_empresa4 == 5 || Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)  <!-- Substitua 1 pelo ID correto da empresa Inusitta -->
                        <button class="glow-on-hover" type="button" onclick="window.location='{{ route('inusitta.index') }}'" >
                            <img src="images/inusitta(2).png" alt="Inusitta Logo" style="width: 200px; height: 100px; margin-right: 5px;">
                        </button>
                    @endif 
                        
                    @if(Auth::check() && Auth::user()->id_empresa1 == 22 || Auth::user()->id_empresa2 == 22 || Auth::user()->id_empresa3 == 22 || Auth::user()->id_empresa4 == 22 || Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('haos.index')}}'">
                            <img src="images/haos(2).png" alt="haos Logo" style="width: 200px; height: 140px; margin-right: 5px;">
                        </button>
                    @endif
                            
                    @if(Auth::check() && Auth::user()->id_empresa1 == 2 || Auth::user()->id_empresa2 == 2 || Auth::user()->id_empresa3 == 2 || Auth::user()->id_empresa4 == 2 || Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('artea.index')}}'">
                            <img src="images/artea(2).png" alt="artea Logo" style="width: 200px; height: 100px; margin-right: 5px;">
                        </button>
                    @endif

                    @if(Auth::check() && Auth::user()->id_empresa1 == 1 || Auth::user()->id_empresa2 == 1 || Auth::user()->id_empresa3 == 1 || Auth::user()->id_empresa4 == 1 || Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{ route('lavoratto.index') }}'">
                            <img src="images/lavoratto(2).png" alt="lavoratto Logo" style="width: 230px; height: 100px; margin-right: 5px;">
                        </button>
                    @endif

                    
                    


                    
                </div>
            </div>
        </div>
    </div>
        
</x-app-layout>





<style>
    .glow-on-hover {
    width: 240px;
    height: 120px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;

    display: flex;
    justify-content: center;
    align-items: center;

    
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.glow-on-hover:before {
    content: '';
    background: #4F46E5;
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