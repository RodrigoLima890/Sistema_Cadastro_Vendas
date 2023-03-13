<?php 
include '../Model/bd.php';

//criar consulta
$query = "SELECT quantidade, tipo_pagamento, preco FROM venda";
$consulta = mysqli_query($conexao, $query);

//varer a consulta
$quantidade = 0;
$tiposAVista = 0;
$tiposParcelado = 0;
$totalVendido = 0;

while ($linha = mysqli_fetch_array($consulta)) {
    $quantidade += $linha['quantidade'];
    $totalVendido += $linha['preco'];
    $tipoPagamento = $linha['tipo_pagamento'];
    if($tipoPagamento == 'À Vista'){
        $tiposAVista++;
    }else{
        $tiposParcelado++;
    }
}

$html = "";
$html .= '<h1>Relatório De Vendas</h1><br>';
$html .= '<hr>';
$html .='<h3>Você Vendeu <span>'.$quantidade.'</span> Produtos</h3><br>';
$html .='<h3>Ao Todo Foram Vendidos <span>R$'.$totalVendido.'</span></h3><br>';
$html .='<h3>Vendeu <span>'.$tiposAVista.'</span> Produtos Á Vista</h3><br>';
$html .='<h3>Vendeu <span>'.$tiposParcelado.'</span> Produtos Parcelado</h3><br>';
$html .='<hr>';

//Autoload do composer
require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;

//instanciando o Dompdf
$dompdf = new Dompdf();


//Carregar html para o pdf
$dompdf-> loadHtml($html);

//Renderizar o arquivo PDF
$dompdf -> render();

//configurações da folha
$dompdf->setPaper('A4', 'portrait');

//imprimir o conteudo na tela
header('Content-type: application/pdf');
echo $dompdf -> output();

?>