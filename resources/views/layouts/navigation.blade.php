<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    @if(Auth::check() && Auth::user()->id_permission == NULL || Auth::user()->id_permission == 3)
                        <x-nav-link>
                            <!--==================================================-->
                            <!-- Formulário de Busca -->
                            <div class="busca">
                                <form id="form_search" action="{{ route('filesCommonUser.search') }}" method="GET">
                                    <input id="input_search" type="text" name="search" placeholder="Buscar arquivo pelo código..." value="{{ request('search') }}" required>
                                    <button id="button_search" type="submit">Buscar</button> 
                                </form>

                            </div>

                            <!--==================================================-->
                        </x-nav-link>
                    @endif

                    @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                            {{ __('Usuários') }}
                        </x-nav-link>
                        
                        <x-nav-link :href="route('files.index')" :active="request()->routeIs('files.index')"> 
                            {{__('Arquivos')}}
                        </x-nav-link> 

                        @if(Auth::check() && Auth::user()->id_permission == 1)
                            <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.index')">
                                {{ __('Empresas') }}
                            </x-nav-link>

                            <x-nav-link :href="route('sectors.index')" :active="request()->routeIs('sectors.index')">
                                {{ __('Setores') }}
                            </x-nav-link>

                            <x-nav-link :href="route('macros.index')" :active="request()->routeIs('macros.index')">
                                {{ __('Macros') }}
                            </x-nav-link>

                            <x-nav-link :href="route('permissions.index')" :active="request()->routeIs('permissions.index')"> 
                                {{__('Permissões')}}
                            </x-nav-link>
                        @endif

                    @endif
                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">


                        <!--=========================================-->
                        <!-- IMPLEMENTAÇÃO DE USUÁRIO INTERMEDIÁRIO -->
                        
                        {{-- @if(Auth::check() && Auth::user()->id_permissao == 1 || Auth::user()->id_permissao == 2)
                            <x-dropdown-link :href="route('users.index')" >
                                {{ __('Usuários')}}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('files.index')" :active="request()->routeIs('files.index')"> 
                                {{__('Arquivos')}}
                            </x-dropdown-link>

                            @if(Auth::check() && Auth::user()->id_permission == 1)
                                <x-dropdown-link :href="route('companies.index')">
                                    {{__('Empresas')}}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('sectors.index')">
                                    {{__('Setores')}}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('macros.index')">
                                    {{__('Macros')}}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                            @endif
                        @endif  --}}

                        <!--=========================================-->


                            @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                                <x-dropdown-link :href="route('users.index')" >
                                    {{ __('Usuários')}}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('files.index')" :active="request()->routeIs('files.index')"> 
                                    {{__('Arquivos')}}
                                </x-dropdown-link>

                                @if(Auth::check() && Auth::user()->id_permission == 1)
                                    <x-dropdown-link :href="route('companies.index')">
                                        {{__('Empresas')}}
                                    </x-dropdown-link>

                                    <x-dropdown-link :href="route('sectors.index')">
                                        {{__('Setores')}}
                                    </x-dropdown-link>

                                    <x-dropdown-link :href="route('macros.index')">
                                        {{__('Macros')}}
                                    </x-dropdown-link>

                                    <x-dropdown-link :href="route('permissions.index')">
                                        {{__('Permissões')}}
                                    </x-dropdown-link>

                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                @endif
                            @endif
                        
                        

                        

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">

                @if(Auth::check() && Auth::user()->id_permission == 1 || Auth::user()->id_permission == 2)
                    <x-responsive-nav-link :href="route('users.index')">
                        {{ __('Usuários') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('files.index')">
                        {{__('Arquivos')}}
                    </x-responsive-nav-link>

                    @if(Auth::check() && Auth::user()->id_permission == 1)
                        <x-responsive-nav-link :href="route('companies.index')">
                            {{ __('Empresas') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('sectors.index')">
                            {{ __('Setores') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('macros.index')">
                            {{__('Macros')}}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('permissions.index')">
                            {{ __('Permissões') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                    @endcan

                @endif
                

                

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<!--==================================================-->
<!-- CSS - CAMPO DE BUSCA -->
<style>
    /* Estilos para centralizar o conteúdo */
    .busca {
        display: flex;
        justify-content: center; /* Centraliza horizontalmente */
       /* align-items: center;  Centraliza verticalmente */
        height: 10vh; /* Usa toda a altura da tela */
    }

    #form_search {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Alinha verticalmente */
            margin: 20px; /* Margem ao redor do formulário */
        }

        #input_search {
            padding: 10px;
            margin-right: 5px; /* Espaço entre o input e o botão */
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px; /* Largura do campo de texto */
            color: black;
        }

        #button_search {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4F46E5;
            color: white;
            cursor: pointer;
        }

    #button_search:hover {
        background-color: #423cbb;
    }
</style>
<!--==================================================-->
