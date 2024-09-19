{{--<x-alert></x-alert>--}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Selecione um usuário",
            allowClear: true
        });
    });
</script>

@csrf() 

<label for="user_id">Selecione o Usuário</label><br>
<select name="user_id" class="select2">
    @foreach ($users as $user)
        <option value="{{ $user->id }}" 
            {{ (isset($file) && $file->user_id == $user->id) || old('user_id') == $user->id ? 'selected' : '' }}>
            {{ $user->name }}
        </option>
    @endforeach
</select>
<br>
<br>
<label for="id_macro">Selecione a Macro</label><br>
<select name="id_macro" class="select2">
    @foreach ($macros as $macro)
        <option value="{{ $macro->id_macro }}" 
            {{ (isset($file) && $file->id_macro == $macro->id_macro) || old('id_macro') == $macro->id_macro ? 'selected' : '' }}>
            {{ $macro->name_macro }}
        </option>
    @endforeach
</select>
<br>
<br>
<label for="id_setor">Selecione o Setor</label><br>
<select name="id_setor" class="select2">
    @foreach ($sectors as $sector)
        <option value="{{ $sector->id_setor }}" 
            {{ (isset($file) && $file->id_setor == $sector->id_setor) || old('id_setor') == $sector->id_setor ? 'selected' : '' }}>
            {{ $sector->name_setor }}
        </option>
    @endforeach
</select>
<br>
<br>
<label for="id_empresa">Selecione a Empresa</label><br>
<select name="id_empresa" class="select2">
    @foreach ($companies as $company)
        <option value="{{ $company->id_empresa }}" 
            {{ (isset($file) && $file->id_empresa == $company->id_empresa) || old('id_empresa') == $company->id_empresa ? 'selected' : '' }}>
            {{ $company->name_empresa }}
        </option>
    @endforeach
</select>
 <br>
<br>
<input id="input" type="number" name="versao" placeholder="Versão do Documento" value="{{ $file->versao ?? old('versao') }}" min="1" step="1" required>
<br>
<input id="input" type="text" name="codidgo" placeholder="Código do Documento" value="{{ $file->codigo ?? old ('codigo')}}" required>
<input id="input" type="text" name="path" placeholder="Path" value="{{ $file->file_path ?? old('file_path') }}" required>
<button type="submit">Enviar</button> 

{{-- <!-- Formulário de upload de arquivos -->
<form action="{{ route('files.create') }}" method="POST" enctype="multipart/form-data" > --}}
    
    {{-- <label class="block text-gray-700 dark:text-gray-300" for="files">Selecione os arquivos</label>
    <input id="x" type="file" name="files[]" id="files" multiple class="mt-1 block w-full" accept=".pdf,.xlsx,.ods" required>
    @error('files.*')
    <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror --}}

{{-- <div class="flex items-center ">
        <x-primary-button>
            {{ __('Enviar Arquivos') }}
        </x-primary-button>
    </div> --}}
{{-- </form>  --}}





<style>
    /* Estilo geral para os campos de texto */
    #input, select {
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
    #input:focus {
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