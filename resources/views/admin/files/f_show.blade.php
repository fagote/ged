<x-icon></x-icon>

@extends('admin.layouts.app')

@section('title', "Detalhes do Arquivo")

@section('content')
<br>
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Deseja realmente excluir o Arquivo "{{$file->codigo}}" ?</h1><br>
    <ul class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" id="file-system">
        <li>Usuário: {{$file->user->name}}</li>
        <li>Path: {{$file->file_path}}</li>
        <li>Versão: {{$file->versao}}</li>
        <li>Código: {{$file->codigo}}</li>
        <li>Macro: {{$file->macro->name_macro}}</li>
        <li>Empresas: @php
                        $empresaIds = [$file->id_empresa1, $file->id_empresa2, $file->id_empresa3, $file->id_empresa4];
                        $nomesEmpresas = collect($empresaIds)
                            ->filter() // Remove IDs nulos
                            ->map(fn($id) => \App\Models\Company::find($id)?->name_empresa ?? 'Empresa não encontrada')
                            ->join(', '); // Junta os nomes com vírgulas
                    @endphp
        {{$nomesEmpresas ?: 'Nenhuma empresa definida'}}</li>
        <li>Setores: @php
                        $setoresIds = [$file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4, $file->id_setor5, $file->id_setor6,$file->id_setor7,$file->id_setor8,$file->id_setor9,$file->id_setor10,$file->id_setor11,$file->id_setor12,$file->id_setor13,$file->id_setor14,$file->id_setor15,$file->id_setor16,$file->id_setor17,$file->id_setor18,$file->id_setor19,$file->id_setor20,$file->id_setor21,$file->id_setor22,$file->id_setor23,$file->id_setor24,$file->id_setor25,$file->id_setor26,$file->id_setor27,$file->id_setor28,$file->id_setor29,$file->id_setor30,$file->id_setor31,$file->id_setor32,$file->id_setor33,$file->id_setor34,$file->id_setor35,$file->id_setor36,$file->id_setor37,$file->id_setor38];
                        $nomesSetores = collect($setoresIds)
                            ->filter() // Remove IDs nulos
                            ->map(fn($id) => \App\Models\Sector::find($id)?->name_setor ?? 'Setor não encontrado')
                            ->join(', '); // Junta os nomes com vírgulas
                    @endphp
        {{$nomesSetores ?: 'Nenhum setor definido'}}</li>
    </ul><br>

        <form action="{{ route('files.destroy', $file->id) }}" method="post">

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

#file-system {
            list-style: none;
            padding: 0;
        }

#file-system li {
    padding: 10px;
    border-bottom: 1px solid #ccc; /* Linha entre pastas e arquivos */
    width: 60%;
}
</style>

