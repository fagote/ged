<!-- <x-alert></x-alert> -->

@csrf() 

<input type="text" name="name_setor" placeholder="Nome" value="{{ $sector->name_setor ?? old('name_setor') }}" required>
<input type="number" name="id_setor" placeholder="ID Setor" value="{{ $sector->id_setor ?? old('id_setor') }}" min="1" step="1" required>
<input type="email" name="email" placeholder="Email" value="{{ $sector->email ?? old('email') }}" required>
<button type="submit">Enviar</button>

<style>
    /* Estilo geral para os campos de texto */
input[type="text"],
input[type="number"],
input[type="email"]{
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
input[type="number"]:focus,
input[type="email"]:focus {
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

</style>