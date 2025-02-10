<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Editar setor')

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editar o setor "{{$sector->name_setor}}"</h1>
    <br>

    <!-- <x-alert/> -->

    <form action=" {{ route('sectors.update', $sector->id_setor) }} " method="POST">

        @method('PUT')
        @include('admin.sectors.s_partials.s_form')
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
