@extends('admin.layouts.app')


@section('title', 'Editar usuário')

@section('content')
    <h1 style="color: white">Editar o Usuário {{$user->name}}</h1>
    <br>

    
    <x-alert style="color: white"></x-alert>

    <form action=" {{ route('users.update', $user->id) }} " method="POST">

        @method('PUT')
        @include('admin.users.partials.form')
    </form>

@endsection