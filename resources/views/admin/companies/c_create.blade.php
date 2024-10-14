<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Adicionar nova empresa')
@section('content')

    <!-- <h1 style=color:white>Nova Empresa</h1> -->

    @include('admin.companies.c_partials.c_breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Nova Empresa
        </h2> 


    </div>

    <form action=" {{ route('companies.store') }} " method="POST">
        
        @include('admin.companies.c_partials.c_form')
    </form>

@endsection