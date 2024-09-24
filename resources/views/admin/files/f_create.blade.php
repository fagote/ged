@extends('admin.layouts.app')


@section('title', 'Novo Arquivo')
@section('content')

    <!-- <h1 style= color:white>Novo Usuário</h1> -->

    @include('admin.files.f_partials.f_breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Novo Arquivo
        </h2> 
    </div>

    <form action="{{ route('files.store') }}" method="POST">

        @csrf
        @include('admin.files.f_partials.f_form')
        
    </form>

@endsection