@extends('admin.layouts.app')


@section('title', 'Adicionar permissão')
@section('content')

    <!-- <h1 style=color:white>Nova Empresa</h1> -->

    {{-- @include('admin.permissions.p_partials.p_breadcrumb') --}}

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Nova Permissão
        </h2> 


    </div>

    <form action=" {{ route('permissions.store') }} " method="POST">
        
        @include('admin.permissions.p_partials.p_form')
    </form>

@endsection