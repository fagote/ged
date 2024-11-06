<x-alert></x-alert>

@csrf() 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Selecione uma opção",
            allowClear: true
        });
    });
</script>

@csrf() 



<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
<br>
<label for="id_empresa">Selecione a Empresa</label><br>
<select name="id_empresa" class="select2">
    @foreach ($companies as $company)
        <option value="{{ $company->id_empresa }}" 
            {{ (isset($user) && $user->id_empresa == $company->id_empresa) || old('id_empresa') == $company->id_empresa ? 'selected' : '' }}>
            {{ $company->name_empresa }}
        </option>
    @endforeach
</select> <br>

<br>
<label for="id_setor">Selecione o Setor</label><br>
<select name="id_setor" class="select2">
    @foreach ($sectors as $sector)
        <option value="{{ $sector->id_setor }}" 
            {{ (isset($user) && $user->id_setor == $sector->id_setor) || old('id_setor') == $sector->id_setor ? 'selected' : '' }}>
            {{ $sector->name_setor }}
        </option>
    @endforeach
</select><br>

<br>

@if(Auth::check() && Auth::user()->id_permission == 1)
    <label for="id_permission">Selecione a Permissão do Usuário</label><br>
    <select name="id_permission" class="select2">
        @foreach ($permissions as $permission)
            <option value="{{ $permission->id_permissao }}" 
                {{ (isset($user) && $user->id_permission == $permission->id_permissao) || old('id_permission') == $permission->id_permissao ? 'selected' : '' }}>
                {{ $permission->descricao }}
            </option>
        @endforeach
    </select><br>
@endif
<br>

<input type="password" name="password" placeholder="Senha">
<button type="submit">Enviar</button>

<style>
    /* Estilo geral para os campos de texto */
input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 60%; /* Faz com que os campos preencham toda a largura disponível */
    padding: 10px; /* Espaçamento interno */
    margin-bottom: 15px; /* Espaço entre os campos */
    border: 1px solid #ccc; /* Cor da borda */
    border-radius: 5px; /* Bordas arredondadas */
    font-size: 16px; /* Tamanho da fonte */
    box-sizing: border-box; /* Inclui o padding na largura total */
    transition: border-color 0.3s ease; /* Transição suave para a cor da borda */
}

/* Muda a cor da borda ao focar no campo */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #007BFF; /* Cor da borda ao focar */
    outline: none; /* Remove o outline padrão */
}

/* Estilo do botão de envio */
button[type="submit"] {
    width: 60%; /* Faz com que o botão preencha toda a largura disponível */
    padding: 10px; /* Espaçamento interno */
    background-color: #007BFF; /* Cor de fundo */
    color: white; /* Cor do texto */
    border: none; /* Remove a borda */
    border-radius: 5px; /* Bordas arredondadas */
    font-size: 16px; /* Tamanho da fonte */
    cursor: pointer; /* Cursor de mão ao passar sobre o botão */
    transition: background-color 0.3s ease; /* Transição suave para a cor de fundo */
}

/* Efeito de hover no botão de envio */
button[type="submit"]:hover {
    background-color: #0056b3; /* Cor de fundo ao passar o mouse */
}

@media(prefers-color-scheme: dark){
        label, #x, script {
            color: white;
        }
        
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: black; /* Define o texto da seleção para preto */
    }

    .select2-container--default .select2-results__option {
        color: black; /* Define o texto das opções para preto */
    }

</style>