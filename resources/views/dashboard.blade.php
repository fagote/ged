
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
        
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="uploaded-files">
                    <h2>Empresas:</h2><br>
                    
                    @can('is-admin')
                        <button class="glow-on-hover" type="button" onclick="window.location='{{ route('inusitta.index') }}'" >
                            <img src="images/inusitta.png" alt="Inusitta Logo" style="width: 100px; height: 50px; margin-right: 5px;">
                        </button> <!--onclick é um evento javascript-->
                            
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('users.index')}}'">
                            <img src="images/microsoft.png" alt="microsoft Logo" style="width: 100px; height: 50px; margin-right: 5px;">
                        </button>
                        
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('users.index')}}'">
                            <img src="images/haos.png" alt="haos Logo" style="width: 120px; height: 50px; margin-right: 5px;">
                        </button>
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{ route('users.index') }}'">
                            <img src="images/apple.png" alt="haos Logo" style="width: 50px; height: 50px; margin-right: 5px;">
                        </button>
                    @endcan

                        {{-- <button class="glow-on-hover" type="button" onclick="window.location='{{ route('inusitta.index') }}'" >
                            <img src="images/inusitta.png" alt="Inusitta Logo" style="width: 100px; height: 50px; margin-right: 5px;">
                        </button> <!--onclick é um evento javascript-->

                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('users.index')}}'">
                            <img src="images/microsoft.png" alt="microsoft Logo" style="width: 100px; height: 50px; margin-right: 5px;">
                        </button>
                        
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{route('users.index')}}'">
                            <img src="images/haos.png" alt="haos Logo" style="width: 120px; height: 50px; margin-right: 5px;">
                        </button>
                        <button  class="glow-on-hover" type="button" onclick="window.location='{{ route('users.index') }}'">
                            <img src="images/apple.png" alt="haos Logo" style="width: 50px; height: 50px; margin-right: 5px;">
                        </button> --}}
            </div>
        </div>
    </div>
        
</x-app-layout>





<style>
    .glow-on-hover {
    width: 120px;
    height: 60px;
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