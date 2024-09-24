@extends('admin.layouts.app')

@section('title', "Detalhes da Permissão")

@section('content')
    <h1>Informações da permissão </h1>
    <ul>
        <li>Id Usuário: {{ $permission->id_usuario }}</li>
        <li>Id Empresa: {{ $permission->id_empresa }}</li>
        <li>Id Setor: {{ $permission->id_setor }}</li>

    </ul>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

    @can('is-admin')
        <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Deletar</button>

        </form>

        @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    @endcan


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

