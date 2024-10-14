<x-icon></x-icon>
@extends('admin.layouts.app')

@section('title', "Detalhes do Setor")

@section('content')
    <h1>Informações do Setor {{$sector->name_setor}}</h1>
    <ul>
        <li>ID: {{ $sector->id_setor }}</li>
        <li>Name: {{ $sector->name_setor }}</li>
    </ul>


    @can('is-admin')
        <form action="{{ route('sectors.destroy', $sector->id_setor) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Excluir</button>

        </form>
    @endcan


@endsection



<style>

    @media(prefers-color-scheme: dark){
        h1, li{
            color: white;
        }
    }

    @media(prefers-color-scheme: light){
        h1, li{
            color: black;
        }
    }

    button[type="submit"] {
    width: 40%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>

