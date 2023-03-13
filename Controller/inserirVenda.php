<?php 

//Comunicação com o BD
include '../Model/bd.php';

//pegar dados do form
$tipoPagamento = $_POST['pagamento'];
$dataVenda = $_POST['data'];
$numeroNotaFiscal = $_POST['nota-fiscal'];
$nome = $_POST['nome-produto'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

//Melhorar saída na tabela
if($tipoPagamento == 'avista'){
    $tipoPagamento = 'À Vista';
}else{
    $tipoPagamento = 'Parcelado';
}

//validar data da venda
$dataForm = new DateTime($dataVenda);
$dataAtual = new DateTime();

if($dataForm > $dataAtual){
    echo '<script>alert("Data Inválida!")</script>';
    echo '<meta http-equiv="refresh" content="0"; url=../view/cadastroVenda.php?pagina=cadastrarVenda">';
    exit();
}

//Limpeza básica de dados
$nome = filter_input(INPUT_POST,'nome-produto',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$numeroNotaFiscal = filter_input(INPUT_POST,'nota-fiscal',FILTER_SANITIZE_NUMBER_INT);

//inserção do bd
$query = "INSERT INTO venda(nome_produto, quantidade, preco, tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('$nome', $quantidade, $preco, '$tipoPagamento', '$dataVenda', $numeroNotaFiscal)";

mysqli_query($conexao, $query);

//redirecionamento da página
header('Location: ../view/index.php');

?>