<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Criar novo setor')
@section('content')

    

    {{-- @include('admin.sectors.s_partials.s_breadcrumb') --}}

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Novo Setor
        </h2> 
    </div>

    <form action=" {{ route('sectors.store') }} " method="POST">
        
        @include('admin.sectors.s_partials.s_form')
    </form>

@endsection