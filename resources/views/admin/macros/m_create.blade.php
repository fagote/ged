<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Adicionar nova macro')
@section('content')

    <!-- <h1 style=color:white>Nova Empresa</h1> -->

    @include('admin.macros.m_partials.m_breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Nova Macro
        </h2> 


    </div>

    <form action=" {{ route('macros.store') }} " method="POST">
        
        @include('admin.macros.m_partials.m_form')
    </form>

@endsection