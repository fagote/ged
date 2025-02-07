
<x-icon></x-icon>

@extends('admin.layouts.app')

@section('title', "File Manager")

@section('content')
    <h1 >Deseja realmente excluir o usuário {{$user->name}}</h1>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

    
        <form action="{{ route('users.destroy', $user->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Excluir</button>

        </form>


    
 


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

