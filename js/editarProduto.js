function exibirImagem(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('imagemProduto').src = e.target.result;
            document.getElementById('nomeImagem').textContent = input.files[0].name;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
