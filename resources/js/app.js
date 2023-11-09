import './bootstrap';

document.getElementById('imagem').addEventListener('change', function () {
    const fileInput = this;
    const imagePreview = document.getElementById('imagem-preview');
    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
        };
        reader.readAsDataURL(fileInput.files[0]);
    } else {
        imagePreview.src = '#'; // Limpa a visualização se o usuário não selecionar nenhum arquivo
    }
});


