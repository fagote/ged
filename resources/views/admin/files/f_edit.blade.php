@extends('admin.layouts.app')


@section('title', 'Editar Arquivo')

@section('content')
    <h1 >Editar o Arquivo {{$file->codigo}}</h1>
    <br>

    
    <x-alert style="color: white"></x-alert>

    <form action=" {{ route('files.update', $file->id) }} " method="POST" enctype="multipart/form-data">

        @method('PUT')
        @include('admin.files.f_partials.f_form')
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