<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Editar usuário')

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editar o Usuário "{{$user->name}}"</h1>
    <br>

    
    <x-alert style="color: white"></x-alert>

    <form action=" {{ route('users.update', $user->id) }} " method="POST">

        @method('PUT')
        @include('admin.users.partials.form')
    </form>

    </div>
    <x-footer> </x-footer>
@endsection

<style>
    @media(prefers-color-scheme: dark){
        h1{
            color: white;
        }
    }

    @media(prefers-color-scheme: light){
        h1{
            color: black;
        }
    }
</style>