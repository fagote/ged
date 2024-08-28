@extends('admin.layouts.app')


@section('title', 'Editar setor')

@section('content')
    <h1 style="color: white">Editar o setor {{$sector->name_sector}}</h1>
    <br>

    <!-- <x-alert/> -->

    <form action=" {{ route('sectors.update', $sector->id_sector) }} " method="POST">

        @method('PUT')
        @include('admin.sectors.s_partials.s_form')
    </form>

@endsection