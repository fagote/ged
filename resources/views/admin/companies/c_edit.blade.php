@extends('admin.layouts.app')


@section('title', 'Editar empresa')

@section('content')
    <h1 style="color: white">Editar a empresa {{$company->name_empresa}}</h1>
    <br>

    <!-- <x-alert/> -->

    <form action=" {{ route('companies.update', $company->id_empresa) }} " method="POST">

        @method('PUT')
        @include('admin.companies.c_partials.c_form')
    </form>

@endsection