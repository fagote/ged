@extends('admin.layouts.app')

@section('title', "Detalhes do Usuário")

@section('content')
    <h1>Editar o Usuário{{$user->name}}</h1>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>


    @can('owner', $user)
        pode Deletar
    @endcan

    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Deletar</button>

        </form>
    @endcan


@endsection
