<?php
if (isset($_FILES['imagem']['tmp_name'])) {
    $imagem_temp = $_FILES['imagem']['tmp_name'];

    if ($imagem_temp != "") {
        $imagem_data = file_get_contents($imagem_temp);
        $imagem_base64 = base64_encode($imagem_data);
        echo '<img id="imagem-preview" src="data:image/png;base64,' . $imagem_base64 . '" />';
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="imagem" id="imagem" />
</form>

<?php
if (isset($_POST['delete_product'])) {
    $productId = $_POST['product_id'];
    // Exiba um modal de confirmação
    echo '<script>
        if (confirm("Tem certeza que deseja excluir este produto?")) {
            window.location.href = "/excluir-produto/' . $productId . '";
        }
    </script>';
}
?>

<?php
// Em cada produto listado, você deve ter um botão para excluir, como o exemplo abaixo:
echo '<button class="delete-product" data-id="' . $productId . '">Excluir</button>';
?>

<form method="post" action="">
    <input type="hidden" name="delete_product" value="true" />
    <input type="hidden" name="product_id" value="<?php echo $productId; ?>" />
</form>

<?php
$cards = []; // Preencha este array com os dados dos cartões, como nome, descrição e preço.

if (isset($_POST['filtroGeral'])) {
    $termoPesquisa = strtolower($_POST['filtroGeral']);

    foreach ($cards as $card) {
        $nome = strtolower($card['nome']);
        $descricao = strtolower($card['descricao']);
        $preco = $card['preco'];

        if (strpos($nome, $termoPesquisa) !== false || strpos($descricao, $termoPesquisa) !== false || strpos($preco, $termoPesquisa) !== false) {
            // Exiba o cartão
            echo '<div class="card1">
                <h2 class="card-title">' . $card['nome'] . '</h2>
                <p class="card-text">' . $card['descricao'] . '</p>
                <span id="preco">R$ ' . $card['preco'] . '</span>
            </div>';
        }
    }
}
?>

<form method="post" action="">
    <input type="text" id="filtroGeral" name="filtroGeral" />
</form>
