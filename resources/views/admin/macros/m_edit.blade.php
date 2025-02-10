<x-icon></x-icon>
@extends('admin.layouts.app')


@section('title', 'Editar macro')

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editar a macro "{{$macro->name_macro}}"</h1>
    <br>

    <!-- <x-alert/> -->
    @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <form action=" {{ route('macros.update', $macro->id_macro) }} " method="POST">

        @method('PUT')
        @include('admin.macros.m_partials.m_form')
    </form>

@endsection

<style>
    @media(prefers-color-scheme: dark){
        h1 {
            color: white;
        }
    }

    @media(prefers-color-scheme: light){
        h1 {
            color: black;
        }
    }
</style>