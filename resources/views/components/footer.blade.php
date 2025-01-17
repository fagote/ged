<footer class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
    <div class="container mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-sm text-gray-600 dark:text-gray-300">
                &copy; 2024 File Manager. Todos os direitos reservados. Desenvolvido por Inusittá.
            </div>
            <div class="mt-4 md:mt-0">
                <ul class="flex space-x-4">
                    <li>
                        <a href="javascript:void(0)" 
                           class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white" 
                           onclick="toggleModal('termsModal')">
                            Termos de Uso
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" 
                           class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white" 
                           onclick="toggleModal('privacyModal')">
                            Política de Privacidade
                        </a>
                    </li>
                    <li>
                        <h2 class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                            qualidade@inusitta.com.br
                        </h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Modal para Termos de Uso -->
<div id="termsModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg max-w-md w-full">
        <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Termos de Uso</h2>
            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                1. Aceitação dos Termos
                Ao acessar e utilizar o Gerenciador de Arquivos, você concorda em cumprir estes Termos de Uso. Caso não concorde com algum termo, você não deve utilizar este serviço.

                2. Descrição do Serviço
                O Gerenciador de Arquivos é uma plataforma que permite o armazenamento, compartilhamento e gerenciamento de arquivos. A utilização do serviço está sujeita às condições estabelecidas neste documento.

                3. Responsabilidades do Usuário

                O usuário é responsável por todas as atividades realizadas em sua conta.
                É proibido o uso do serviço para armazenar, compartilhar ou gerenciar conteúdos ilegais, ofensivos ou que violem direitos de terceiros.
                O usuário deve manter as informações de sua conta seguras, como a senha, e notificar imediatamente qualquer uso não autorizado.
                4. Restrições de Uso
                Você não deve:

                Usar o serviço para qualquer finalidade ilegal.
                Tentar obter acesso não autorizado ao sistema ou a outras contas.
                Carregar arquivos que contenham vírus, malware ou qualquer outro código malicioso.
                5. Modificações no Serviço
                Reservamo-nos o direito de modificar, suspender ou descontinuar o serviço, total ou parcialmente, a qualquer momento, com ou sem aviso prévio.

                6. Isenção de Garantias
                O serviço é fornecido "como está" e "conforme disponível". Não garantimos que o serviço será ininterrupto, livre de erros ou que os arquivos serão 100% protegidos.

                7. Limitação de Responsabilidade
                Em nenhuma circunstância seremos responsáveis por quaisquer danos diretos, indiretos, incidentais ou consequenciais resultantes do uso ou incapacidade de uso do serviço.

                8. Alterações nos Termos
                Podemos atualizar estes Termos de Uso periodicamente. As alterações serão notificadas por meio da plataforma ou outro canal apropriado.
            </p>
            <div class="mt-6 flex justify-end">
                <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300"
                        onclick="toggleModal('termsModal')">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Política de Privacidade -->
<div id="privacyModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg max-w-md w-full">
        <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Política de Privacidade</h2>
            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                1. Informações Coletadas
                Coletamos as seguintes informações ao utilizar nosso serviço:

                Informações pessoais fornecidas pelo usuário, como nome e e-mail.
                Dados de acesso, como endereço IP, tipo de navegador e logs do sistema.
                2. Uso das Informações
                As informações coletadas são utilizadas para:

                Prover e melhorar o serviço.
                Personalizar a experiência do usuário.
                Garantir a segurança e evitar fraudes.
                3. Compartilhamento de Informações
                Não compartilhamos suas informações com terceiros, exceto:

                Quando exigido por lei.
                Para proteger nossos direitos ou prevenir fraudes.
                Com provedores de serviços que auxiliam na operação do sistema.
                4. Segurança das Informações
                Empregamos medidas técnicas e organizacionais para proteger os dados armazenados no sistema. No entanto, nenhum método de transmissão ou armazenamento é totalmente seguro.
            </p>
            <div class="mt-6 flex justify-end">
                <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300"
                        onclick="toggleModal('privacyModal')">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    const body = document.body;

    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        body.classList.add('modal-open'); // Adiciona a classe para desfoque
    } else {
        modal.classList.add('hidden');
        body.classList.remove('modal-open'); // Remove a classe para desfoque
    }
}


</script>

<style>/* Classe para aplicar desfoque no fundo */
    .modal-open {
        overflow: hidden; 
    }
    
    .modal-open main, .modal-open footer, .modal-open header {
        filter: blur(4px);
        transition: filter 0.3s ease; 
    }
</style>