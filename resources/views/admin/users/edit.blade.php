@extends('admin.layouts.app')


@section('title', 'Editar usuário')

@section('content')
    <h1 >Editar o Usuário {{$user->name}}</h1>
    <br>

    
    <x-alert style="color: white"></x-alert>

    <form action=" {{ route('users.update', $user->id) }} " method="POST">

        @method('PUT')
        @include('admin.users.partials.form')
    </form>

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