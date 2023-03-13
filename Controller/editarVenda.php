<?php
include '../Model/bd.php';

$id_venda = $_POST['id'];
$tipoPagamento = $_POST['pagamento'];
$dataVenda = $_POST['data'];
$numeroNotaFiscal = $_POST['nota-fiscal'];
$nome = $_POST['nome-produto'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

if($tipoPagamento == 'avista'){
    $tipoPagamento = 'À Vista';
}else{
    $tipoPagamento = 'Parcelado';
}

$dataForm = new DateTime($dataVenda);
$dataAtual = new DateTime();

if($dataForm > $dataAtual){
    echo '<script>alert("Data Inválida!")</script>';
    echo '<meta http-equiv="refresh" content="0"; url=../view/cadastroVenda.php?pagina=cadastrarVenda">';
    exit();
}

$nome = filter_input(INPUT_POST,'nome-produto',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$numeroNotaFiscal = filter_input(INPUT_POST,'nota-fiscal',FILTER_SANITIZE_NUMBER_INT);

$query = "UPDATE venda SET nome_produto ='$nome' ,tipo_pagamento = '$tipoPagamento', data_venda = '$dataVenda',
quantidade = $quantidade, preco = $preco, numero_nota_fiscal = $numeroNotaFiscal
WHERE id = $id_venda";

mysqli_query($conexao, $query);

header('Location: ../view/index.php');

?>