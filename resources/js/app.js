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

document.addEventListener("DOMContentLoaded", function() {
    var deleteButtons = document.querySelectorAll('.delete-product');

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var productId = button.getAttribute('data-id');

            // Exibe um modal de confirmação
            if (confirm('Tem certeza que deseja excluir este produto?')) {
                // Se o usuário confirmar, redirecione para a rota de exclusão
                window.location.href = '/excluir-produto/' + productId;
            }
        });
    });
});

/*
function confirmation(ev){
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
        title: "Deseja Realmente Excluir o Produto?",
        text: "Você ainda pode cancelar a exclusão",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willCancel)
    {
        if (willCancel){
            window.location.href = urlToRedirect;
        }
    });

}
*/

