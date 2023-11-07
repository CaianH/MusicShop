import './bootstrap';

function previewImage(input) {
    const preview = document.getElementById('preview');
    const imagePreview = document.getElementById('imagePreview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
        imagePreview.style.display = 'block';
    } else {
        preview.src = '';
        imagePreview.style.display = 'none';
    }
}
