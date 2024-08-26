<x-alert></x-alert>

@csrf() 

<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit">Enviar</button>

<style>
    /* Estilo geral para os campos de texto */
input[type="text"],
input[type="email"],
input[type="password"] {
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

</style>