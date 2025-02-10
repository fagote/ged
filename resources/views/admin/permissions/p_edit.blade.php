@extends('admin.layouts.app')


@section('title', 'Editar permissão')

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editar a permissão "{{$permission->descricao}}"</h1>
    <br>

    <!-- <x-alert/> -->
    @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <form action=" {{ route('permissions.update', $permission->id_permissao) }} " method="POST">

        @method('PUT')
        @include('admin.permissions.p_partials.p_form')
    </form>

@endsection

<style>
    @media(prefers-color-scheme: dark){
        h1 {
            color: white;
        }
    }

    @media(prefers-color-scheme: light){
        h1 {
            color: black;
        }
    }
</style>