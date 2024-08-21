@extends('admin.layouts.app')

@section('content')
@section('title', 'Listagem dos usuários')

<h1>USUÁRIOS</h1>

<a href="{{ route('users.create') }}">Novo</a>

<br>

    <x-alert></x-alert>
  

    <table>
        <thead>
            <th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </th>
        </thead>
        <tbody>


            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum usuário no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}

@endsection