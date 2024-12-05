{{--<x-alert></x-alert>--}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!--=======================================================-->
{{-- Função para adicionar a funcionalidade de pesquisa ao dropdownlink --}}

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Selecione um usuário",
            allowClear: true
        });
    });
</script>

<!--=======================================================-->
{{-- Token de validação --}}

@csrf() 

<!--=======================================================-->

<label for="user_id">Selecione o Usuário</label><br>
<select name="user_id" id="user_id" class="select2"> 
    @foreach ($users as $user)
    <option value="{{ $user->id }}" 
        {{ (isset($file) && $file->user_id == $user->id) || old('user_id') == $user->id ? 'selected' : '' }}>
        {{ $user->name }} {{-- Função acima serve para puxar os dados para não começar sempre no início da fila --}}
    </option>
    @endforeach
</select>
<br>
<br>

<!--=======================================================-->

<label for="empresas">Selecione as Empresas</label><br>
@foreach ($companies as $company)
    <div>
        <input type="checkbox" 
            name="id_empresa[]" 
            id="empresa_{{ $company->id_empresa }}" 
            value="{{ (int) $company->id_empresa }}"
            {{ isset($file) && in_array($company->id_empresa, (array) [$file->id_empresa1, $file->id_empresa2, $file->id_empresa3, $file->id_empresa4]) ? 'checked' : '' }}
            {{ in_array($company->id_empresa, old('empresas', [])) ? 'checked' : '' }}>
        <label for="empresa_{{ $company->id_empresa }}">{{ $company->name_empresa }}</label>
</div>
@endforeach
 <br>
<br>

<!--=======================================================-->

{{-- <label for="id_setor">Selecione o Setor</label><br>
<select name="id_setor" id="id_setor" class="select2">
    @foreach ($sectors as $sector)
        <option value="{{ $sector->id_setor }}" 
            {{ (isset($file) && $file->id_setor == $sector->id_setor) || old('id_setor') == $sector->id_setor ? 'selected' : '' }}>
            {{ $sector->name_setor }}
        </option>
    @endforeach
</select> --}}

<br>
<label for="setores">Selecione os Setores</label><br>
@foreach ($sectors as $sector)
    <div>
        <input type="checkbox"  
            name="id_setor[]" 
            id="setor_{{ $sector->id_setor }}" 
            value="{{(int) $sector->id_setor }}"
            {{-- Marca os setores que já estão relacionados ao usuário --}}
            {{ isset($file) && in_array($sector->id_setor, (array) [
                $file->id_setor1, $file->id_setor2, $file->id_setor3, $file->id_setor4,
                $file->id_setor5, $file->id_setor6, $file->id_setor7, $file->id_setor8,
                $file->id_setor9, $file->id_setor10, $file->id_setor11, $file->id_setor12,
                $file->id_setor13, $file->id_setor14, $file->id_setor15, $file->id_setor16,
                $file->id_setor17, $file->id_setor18, $file->id_setor19, $file->id_setor20,
                $file->id_setor21, $file->id_setor22, $file->id_setor23, $file->id_setor24,
                $file->id_setor25, $file->id_setor26, $file->id_setor27, $file->id_setor28,
                $file->id_setor29, $file->id_setor30, $file->id_setor31, $file->id_setor32
            ]) ? 'checked' : '' }}

            {{-- Marca os setores que foram selecionados no formulário (valores antigos) --}}
            {{ in_array($sector->id_setor, old('id_setor', [])) ? 'checked' : '' }}>
        
        <label for="setor_{{ $sector->id_setor }}">{{ $sector->name_setor }}</label>
    </div>
@endforeach

<br>
<br>

<!--=======================================================-->

<label for="id_macro">Selecione a Macro</label><br>
<select name="id_macro" id="id_macro" class="select2">
    @foreach ($macros as $macro)
        <option value="{{ $macro->id_macro }}" 
            {{ (isset($file) && $file->id_macro == $macro->id_macro) || old('id_macro') == $macro->id_macro ? 'selected' : '' }}>
            {{ $macro->name_macro }}
        </option>
    @endforeach
</select>
<br>
<br>

<!--=======================================================-->

<input id="versao" type="number" name="versao" placeholder="Versão do Documento" value="{{ $file->versao ?? old('versao') }}" min="1" step="1" required><br>

<!--=======================================================-->

<input id="codigo" type="text" name="codigo" placeholder="Código do Documento" value="{{ $file->codigo ?? old ('codigo')}}" required><br>

<!--=======================================================-->

<label for="arquivo">Selcione o arquivo:   </label><br>
<input type="file" class="mt-1 block w-full" name="file_path" id="arquivo"> <br><br>

<!--=======================================================-->

<button type="submit">Enviar</button> 

<!--=======================================================-->

<style>
    /* Estilo geral para os campos de texto */
    #versao,#codigo,#path, select {
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
    #versao:focus,#codigo:focus,#path:focus {
        border-color: #007BFF; /* Cor da borda ao focar */
        outline: none; /* Remove o outline padrão */
    }

    /* Estilo do botão de envio */
    x-primary-button, button{
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
    x-primary-button:hover, button:hover{
        background-color: #0056b3; /* Cor de fundo ao passar o mouse */
    }

    @media(prefers-color-scheme: dark){
        label, #x, script, #arquivo {
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