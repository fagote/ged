<x-icon></x-icon>
@extends('admin.layouts.app')

@section('title', "Detalhes da Empresa")

@section('content')
    <h1>Informações da empresa {{$company->name_empresa}}</h1>
    <ul>
        <li>Id: {{ $company->id_empresa }}</li>
        <li>Nome: {{ $company->name_empresa }}</li>
    </ul>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

        <form action="{{ route('companies.destroy', $company->id_empresa) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Deletar</button>

        </form>

        @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

@endsection



<style>

@media(prefers-color-scheme: light){
        h1, ul{
            color: black;
        }
    }

    @media(prefers-color-scheme: dark){
        h1, ul{
            color: white;
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

