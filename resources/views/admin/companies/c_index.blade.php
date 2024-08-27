<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EMPRESAS</h1>
    <a href="{{ route('companies.create') }}">Adicionar empresa</a>

    

    <table>
        <thead>
            
            <th>Nome</th>
            <th>Id</th>
            <th>Ações</th>
        
        </thead>
        <tbody>

            @forelse ($companies as $company)
                <tr>
                    <td>{{$company->name_empresa}}</td>
                    <td>{{$company->id_empresa}}</td>
                    <td>actions</td>
                </tr>

            @empty
                <tr>
                    <td colspan="100">Nenhuma empresa no banco</td>
                </tr>

            @endforelse
        </tbody>
    </table>
    {{ $companies->links() }}
</body>
</html>