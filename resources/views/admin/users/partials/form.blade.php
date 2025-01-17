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
<label for="empresas">Selecione as Empresas</label><br>
@foreach ($companies as $company)
    <div>
        <input type="checkbox" 
            name="id_empresa[]" 
            id="empresa_{{ $company->id_empresa }}" 
            value="{{ (int) $company->id_empresa }}"
            {{ isset($user) && in_array($company->id_empresa, (array) [$user->id_empresa1, $user->id_empresa2, $user->id_empresa3, $user->id_empresa4]) ? 'checked' : '' }}
            {{ in_array($company->id_empresa, old('empresas', [])) ? 'checked' : '' }}>
        <label for="empresa_{{ $company->id_empresa }}">{{ $company->name_empresa }}</label>
</div>
@endforeach


{{-- <br>
<label for="id_setor">Selecione o Setor</label><br>
<select name="id_setor" class="select2">
    @foreach ($sectors as $sector)
        <option value="{{ $sector->id_setor }}" 
            {{ (isset($user) && $user->id_setor == $sector->id_setor) || old('id_setor') == $sector->id_setor ? 'selected' : '' }}>
            {{ $sector->name_setor }}
        </option>
    @endforeach
</select><br> --}}

<br>
<label for="setores">Selecione os Setores</label><br>
@foreach ($sectors as $sector)
    <div>
        <input type="checkbox"  
            name="id_setor[]" 
            id="setor_{{ $sector->id_setor }}" 
            value="{{(int) $sector->id_setor }}"
            {{-- Marca os setores que já estão relacionados ao usuário --}}
            {{ isset($user) && in_array($sector->id_setor, (array) [
                $user->id_setor1, $user->id_setor2, $user->id_setor3, $user->id_setor4,
                $user->id_setor5, $user->id_setor6, $user->id_setor7, $user->id_setor8,
                $user->id_setor9, $user->id_setor10, $user->id_setor11, $user->id_setor12,
                $user->id_setor13, $user->id_setor14, $user->id_setor15, $user->id_setor16,
                $user->id_setor17, $user->id_setor18, $user->id_setor19, $user->id_setor20,
                $user->id_setor21, $user->id_setor22, $user->id_setor23, $user->id_setor24,
                $user->id_setor25, $user->id_setor26, $user->id_setor27, $user->id_setor28,
                $user->id_setor29, $user->id_setor30, $user->id_setor31, $user->id_setor32,
                $user->id_setor33, $user->id_setor34, $user->id_setor35, $user->id_setor36,
                $user->id_setor37, $user->id_setor38
            ]) ? 'checked' : '' }}

            {{-- Marca os setores que foram selecionados no formulário (valores antigos) --}}
            {{ in_array($sector->id_setor, old('id_setor', [])) ? 'checked' : '' }}>
        
        <label for="setor_{{ $sector->id_setor }}">{{ $sector->name_setor }}</label>
    </div>
@endforeach


<br>

@if(Auth::check() && Auth::user()->id_permission == 1)
    <label for="id_permission">Selecione a Permissão do Usuário</label><br>
    @foreach ($permissions as $permission)
        <div>
            <input 
                type="radio" 
                name="id_permission" 
                id="permission_{{ $permission->id_permissao }}" 
                value="{{ $permission->id_permissao }}"
                {{ (isset($user) && $user->id_permission == $permission->id_permissao) || old('id_permission') == $permission->id_permissao ? 'checked' : '' }}>
            <label for="permission_{{ $permission->id_permissao }}">
                {{ $permission->descricao }}
            </label>
        </div>
    @endforeach
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