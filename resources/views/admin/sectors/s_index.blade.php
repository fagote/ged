<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Setores</h1>
    <a href="{{ route('sectors.create') }}">Adicionar setor</a>

    

    <table>
        <thead>
            
            <th>Nome</th>
            <th>Id</th>
            <th>Ações</th>
        
        </thead>
        <tbody>

            @forelse ($sectors as $sector)
                <tr>
                    <td>{{$sector->name_sector}}</td>
                    <td>{{$sector->id_sector}}</td>
                    <td>actions</td>
                </tr>

            @empty
                <tr>
                    <td colspan="100">Nenhum setor no banco</td>
                </tr>

            @endforelse
        </tbody>
    </table>
    {{ $sectors->links() }}
</body>
</html>