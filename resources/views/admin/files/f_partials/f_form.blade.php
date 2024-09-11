<x-alert></x-alert>

@csrf() 

<input type="number" name="user_id" placeholder="ID do Usuário" value="{{ $file->user_id ?? old('user_id') }}" min="1" step="1" required>
<input type="number" name="versao" placeholder="Versão do Documento" value="{{ $file->versao ?? old('versao') }}" min="1" step="1" required>
<input type="text" name="codidgo" placeholder="Código do Documento">
<input type="number" name="id_macro" placeholder="ID da Macro" value="{{ $file->id_macro ?? old('id_macro') }}" min="1" step="1" required>
<input type="number" name="id_setor" placeholder="ID do Setor" value="{{ $file->id_setor ?? old('id_setor') }}" min="1" step="1" required>
<input type="number" name="id_empresa" placeholder="ID da Empresa" value="{{ $file->id_empresa ?? old('id_empresa') }}" min="1" step="1" required>

<!-- Formulário de upload de arquivos -->
<form action="{{ route('users.upload', auth()->user()->id) }}" method="POST" enctype="multipart/form-data" >
    
    <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300" for="files">Selecione os arquivos</label>
        <input type="file" name="files[]" id="files" multiple class="mt-1 block w-full" accept=".pdf,.xlsx,.ods" required>
        @error('files.*')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- <div class="flex items-center ">
        <x-primary-button>
            {{ __('Enviar Arquivos') }}
        </x-primary-button>
    </div> --}}
    <button type="submit">Enviar</button> 
</form> 


<style>
    /* Estilo geral para os campos de texto */
input {
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
input:focus {
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

</style>