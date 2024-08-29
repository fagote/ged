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

    @can('is-admin')
        <form action="{{ route('companies.destroy', $company->id_empresa) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Deletar</button>

        </form>
    @endcan


@endsection



<style>

    h1, li{
        color: white
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

