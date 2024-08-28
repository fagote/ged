@extends('admin.layouts.app')

@section('title', "Detalhes do Setor")

@section('content')
    <h1>Informações do Setor {{$sector->name_sector}}</h1>
    <ul>
        <li>ID: {{ $sector->id_sector }}</li>
        <li>Name: {{ $sector->name_sector }}</li>
    </ul>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">

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

