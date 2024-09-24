@extends('admin.layouts.app')


@section('title', 'Editar empresa')

@section('content')
    <h1 >Editar a empresa {{$company->name_empresa}}</h1>
    <br>

    <!-- <x-alert/> -->
    @if (session('success'))
        <div style="color: white; background-color: green; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <form action=" {{ route('companies.update', $company->id_empresa) }} " method="POST">

        @method('PUT')
        @include('admin.companies.c_partials.c_form')
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