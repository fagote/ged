<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Empresas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastrar Nova Empresa</li>
    </ol>
</nav>

<style>

    a {
        color: rgb(255, 255, 255);
        border: 1px solid #ccc; 
        border-radius: 5px;
    }

    a:hover{
        text-decoration: underline;
    }

    li{
        color: rgb(255, 255, 255)
    }
</style>