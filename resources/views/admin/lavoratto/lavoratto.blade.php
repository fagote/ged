<x-icon></x-icon>

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
                                <a href="{{ route('lavorattoTi.index') }}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    TECNOLOGIA DA INFORMAÇÃO
                                </a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 12 || Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{ route('lavorattoMarketing.index') }}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    MARKETING</a>
                            </li>
                        @endif

                        

                        <!--=======================-->

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoAlmoxarifado.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ALMOXARIFADO</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoAssistencia.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ASSISTÊNCIA
                                </a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoComercial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    COMERCIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoCompras.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    COMPRAS</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoContabilidade.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTABILIDADE</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoContasPagar.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTAS A PAGAR</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoContasReceber.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CONTAS A RECEBER</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoCusto.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    CUSTO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoDesign.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DESIGN</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoDiretoriaAdministrativa.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA ADMINISTRATIVA</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoDiretoriaComercial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA COMERCIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoDiretoriaIndustrial.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    DIRETORIA INDUSTRIAL</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoEcommerce.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    E-COMMERCE</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoEngenharia.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    ENGENHARIA</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoExpedicao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    EXPEDIÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoExportacao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    EXPORTAÇÃO</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoFaturamento.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    FATURAMENTO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoManutencao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    MANUTENÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoPed.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    P&D</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoPmo.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PMO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoPpcp.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PPCP</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoQualidade.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    QUALIDADE</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoRecepcao.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RECEPÇÃO</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoRestaurante.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RESTAURANTE</a>
                            </li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoRh.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    RH</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoSac.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    SAC</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoSesmt.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    SESMT</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoProjetos.index')}}" class="folder-link">
                                    <img src="{{ asset('images/icone_pasta.png') }}" alt="icone pasta" style="width:20px; height:20px; margin-right: 10px">
                                    PROJETOS</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->id_setor == 999)
                            <li class="folder">
                                <a href="{{route('lavorattoTransporte.index')}}" class="folder-link">
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

</style>