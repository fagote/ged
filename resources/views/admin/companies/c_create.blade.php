@extends('admin.layouts.app')


@section('title', 'Adicionar nova empresa')
@section('content')

    <h1>Nova Empresa</h1>

    @include('admin.companies.partials.c_breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Nova Empresa
        </h2> 
    </div>

    <form action=" {{ route('companies.store') }} " method="POST">
        
        @include('admin.companies.partials.form')
    </form>

@endsection