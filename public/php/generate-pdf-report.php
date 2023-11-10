<?php
require('public/pdf/fpdf.php'); // Certifique-se de que o caminho para o arquivo FPDF está correto

class PDF extends FPDF
{
    function Header()
    {
        // Cabeçalho do relatório
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Catálogo de Produtos', 0, 1, 'C');
    }

    function Footer()
    {
        // Rodapé do relatório
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Criar um novo objeto PDF
$pdf = new PDF();
$pdf->AddPage();

// Loop através dos produtos e adicione informações ao relatório
$produtos = obterProdutos(); // Substitua essa função pela lógica de obtenção dos seus produtos

foreach ($produtos as $produto) {
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, $produto->nome, 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $produto->descricao);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'R$ ' . $produto->preco, 0, 1);
    $pdf->Ln(10); // Espaço entre os produtos
}

// Saída do PDF (exibição ou download)
$pdf->Output('catalogo_produtos.pdf', 'D');

