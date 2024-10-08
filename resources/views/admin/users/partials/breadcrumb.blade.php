<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Cadastro de novo Usuário</li> -->
    </ol>
</nav>

<style>

    @media (prefers-color-scheme: dark) {
        a{
            color: white;
            border-radius: 5px;
        }

        li{
            color: white;
        }
    }

    @media (prefers-color-scheme: light) {
        a{
            color: black;
            border-radius: 5px;
        }

        li{
            color: black;
        }
    }

    a:hover {
        text-decoration: underline;
    }

</style>
