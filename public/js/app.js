
document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById('imagem');
    const imagePreview = document.getElementById('imagem-preview');

    fileInput.addEventListener('change', function () {
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        } else {
            imagePreview.src = 'data:image/png;base64,'; // Limpa a visualização se o usuário não selecionar nenhum arquivo
        }
    });
});


