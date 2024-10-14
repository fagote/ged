<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Editar setor')

@section('content')
    <h1 >Editar o setor {{$sector->name_setor}}</h1>
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
