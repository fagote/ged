
<x-icon></x-icon>

@extends('admin.layouts.app')

@section('title', "File Manager")

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Deseja realmente excluir o usuário "{{$user->name}}"?</h1>
    <ul class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" id="user-system"><br>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Empresas: @php
            $empresaIds = [$user->id_empresa1, $user->id_empresa2, $user->id_empresa3, $user->id_empresa4];
            $nomesEmpresas = collect($empresaIds)
                    ->filter() // Remove IDs nulos
                    ->map(fn($id) => \App\Models\Company::find($id)?->name_empresa ?? 'Empresa não encontrada')
                    ->join(', '); // Junta os nomes com vírgulas
                    @endphp
            {{$nomesEmpresas ?: 'Nenhuma empresa definida'}}</li>
        <li>Setores: @php
                        $setoresIds = [$user->id_setor1, $user->id_setor2, $user->id_setor3, $user->id_setor4, $user->id_setor5, $user->id_setor6,$user->id_setor7,$user->id_setor8,$user->id_setor9,$user->id_setor10,$user->id_setor11,$user->id_setor12,$user->id_setor13,$user->id_setor14,$user->id_setor15,$user->id_setor16,$user->id_setor17,$user->id_setor18,$user->id_setor19,$user->id_setor20,$user->id_setor21,$user->id_setor22,$user->id_setor23,$user->id_setor24,$user->id_setor25,$user->id_setor26,$user->id_setor27,$user->id_setor28,$user->id_setor29,$user->id_setor30,$user->id_setor31,$user->id_setor32,$user->id_setor33,$user->id_setor34,$user->id_setor35,$user->id_setor36,$user->id_setor37,$user->id_setor38];
                        $nomesSetores = collect($setoresIds)
                            ->filter() // Remove IDs nulos
                            ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                            ->join(', '); // Junta os nomes com vírgulas
                    @endphp
            {{$nomesSetores ?: 'Nenhum setor definido'}}</li>
    </ul><br>


    {{-- @can('owner', $user)
        pode Deletar
    @endcan --}}

    
        <form action="{{ route('users.destroy', $user->id) }}" method="post">

            @csrf
            @method('delete')
            <button type="submit">Excluir</button>

        </form>


    
 


@endsection






<style>

    @media(prefers-color-scheme: light){
        h1, ul{
            color: black;
        }
    }

    @media(prefers-color-scheme: dark){
        h1, ul{
            color: white;
        }
    }


    button[type="submit"] {
    width: 40%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

#user-system {
            list-style: none;
            padding: 0;
        }

#user-system li {
    padding: 10px;
    border-bottom: 1px solid #ccc; /* Linha entre pastas e arquivos */
    width: 60%;
}
</style>

