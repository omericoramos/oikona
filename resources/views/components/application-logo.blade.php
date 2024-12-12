<img id="logo" class="block w-48 mx-6 fill-current text-gray-800 dark:text-gray-200"
    src="{{ asset('images/logo-dark.png') }}" alt="Oikana Logo">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.getElementById('logo');

        // Função para alternar a imagem da logo com base no tema
        const updateLogo = () => {
            if (document.documentElement.classList.contains('dark')) {
                logo.src = "{{ asset('images/logo-dark.png') }}"; // Caminho da logo no tema dark
            } else {
                logo.src = "{{ asset('images/logo-light.png') }}"; // Caminho da logo no tema light
            }
        };

        // Atualiza a logo ao carregar a página
        updateLogo();

        // Alterna a logo ao clicar no botão de tema (caso exista)
        const themeToggle = document.getElementById('theme-toggle');
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                setTimeout(updateLogo,
                100); // Pequeno delay para garantir que a classe dark foi alternada
            });
        }
    });
</script>
