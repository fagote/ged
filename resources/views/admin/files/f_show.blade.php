<x-icon></x-icon>

@extends('admin.layouts.app')

@section('title', "Detalhes do Arquivo")

@section('content')
    <h1>Deseja realmente excluir o Arquivo {{$file->codigo}} ?</h1>
    <ul>
        <li>ID Usuário: {{$file->user_id}}</li>
        <li>Path: {{$file->file_path}}</li>
        <li>Versão: {{$file->versao}}</li>
        <li>Código: {{$file->codigo}}</li>
        <li>ID Macro: {{$file->id_macro}}</li>
        <li>ID Empresa: {{$file->id_empresa}}</li>
        <li>ID Setor: {{$file->id_setor}}</li>
    </ul>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

    @can('is-admin')
        <form action="{{ route('files.destroy', $file->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Excluir</button>

        </form>


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

