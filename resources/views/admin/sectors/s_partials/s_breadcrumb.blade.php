<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sectors.index') }}">Setores</a></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Cadastrar Novo Setor</li> -->
    </ol>
</nav>

<style>

    @media(prefers-color-scheme: dark){

        a {
            color: rgb(255, 255, 255);
            border: 1px solid #ccc; 
            border-radius: 5px;
        }
        
        li{
            color: rgb(255, 255, 255)
        }
        
    }

    @media(prefers-color-scheme: light){

        a {
            color: black;
            border: 1px solid #1f1f1f; 
            border-radius: 5px;
        }

        li{
            color: rgb(0, 0, 0)
        }

    }


    a:hover{
        text-decoration: underline;
    }


</style>