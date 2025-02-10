<x-icon></x-icon>
@extends('admin.layouts.app')

@section('title', "Detalhes do Setor")

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Deseja realmente excluir o setor "{{$sector->name_setor}}" ?</h1><br>
    <ul class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" id="user-system">
        <li>ID Setor: {{ $sector->id_setor }}</li>
        <li>Nome: {{ $sector->name_setor }}</li>
    </ul><br>


        <form action="{{ route('sectors.destroy', $sector->id_setor) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Excluir</button>

        </form>


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
#user-system {
            list-style: none;
            padding: 0;
        }

#user-system li {
    padding: 10px;
    border-bottom: 1px solid #ccc; /* Linha entre pastas e arquivos */
    width: 60%;
}
</style>

