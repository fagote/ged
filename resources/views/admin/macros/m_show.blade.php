<x-icon></x-icon>
@extends('admin.layouts.app')

@section('title', "Detalhes da Macro")

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Deseja realmente excluir a macro "{{$macro->name_macro}}" ?</h1><br>
    <ul class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" id="user-system">
        <li>ID Macro: {{ $macro->id_macro }}</li>
        <li>Nome: {{ $macro->name_macro }}</li>
    </ul><br>


        <form action="{{ route('macros.destroy', $macro->id_macro) }}" method="post">

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

