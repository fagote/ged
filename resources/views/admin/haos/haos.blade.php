
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
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="uploaded-files">
                    <h2> SETORES: </h2><br>


                    <ul class="file-system">
                        @if(Auth::check() && Auth::user()->id_setor == 1 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{ route('haosTi.index') }}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    TECNOLOGIA DA INFORMAÇÃO
                                </a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 12 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{ route('haosMarketing.index') }}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    MARKETING</a>
                            </li>
                        @endif

                        

                        <!--=======================-->

                        @if(Auth::check() && Auth::user()->id_setor == 5 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosAlmoxarifado.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ALMOXARIFADO</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 24 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosAssistencia.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ASSISTÊNCIA
                                </a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 21 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosComercial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    COMERCIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 25 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosCompras.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    COMPRAS</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 26 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosContabilidade.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTABILIDADE</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 27 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosContasPagar.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTAS A PAGAR</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 28 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosContasReceber.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTAS A RECEBER</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 3 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosCusto.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CUSTO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 29 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosDesign.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DESIGN</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 7 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosDiretoriaAdministrativa.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA ADMINISTRATIVA</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 30 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosDiretoriaComercial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA COMERCIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 4 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosDiretoriaIndustrial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA INDUSTRIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 6 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosEcommerce.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    E-COMMERCE</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 2 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosEngenharia.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ENGENHARIA</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 8 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosExpedicao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    EXPEDIÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 9 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosExportacao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    EXPORTAÇÃO</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 31 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosFaturamento.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    FATURAMENTO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 10 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosManutencao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    MANUTENÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 11 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosPed.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    P&D</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 13 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosPmo.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PMO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 14 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosPpcp.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PPCP</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 15 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosQualidade.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    QUALIDADE</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 16 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosRecepcao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RECEPÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 17 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosRestaurante.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RESTAURANTE</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 18 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosRh.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RH</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 19 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosSac.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    SAC</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 20 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosSesmt.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    SESMT</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 22 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosProjetos.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PROJETOS</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 23 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('haosTransporte.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    TRANSPORTE</a>
                            </li>
                        @endif

                    </ul>

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

            @media(prefers-color-scheme: dark){
                color: white;
            }

            font-weight: bold;
        }

       .file {
            color: #16a085;
        }

        .folder-link{
            display: inline-flex;
            align-items: center;
        }

</style>