<?php
include '../config/config.php';

//conexao com o banco de dados
$conexao = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_NOME);

$query = 'SELECT * FROM venda';
$consulta = mysqli_query($conexao, $query);

/*
//Criando tabela venda
$query = 'CREATE TABLE venda(
    id int not null auto_increment,
    nome_produto varchar(35) not null,
    quantidade int not null,
    preco decimal(10,2),
    tipo_pagamento varchar(11) not null,
    data_venda date not null,
    numero_nota_fiscal int not null,
    primary key(id)
    )';
$execute = mysqli_query($conexao, $query);
//Inserir dados na tabela
$query = "INSERT INTO venda(nome_produto,quantidade, preco, tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('Notebook',1, 2500.00,'À Vista', '2023-10-03', 1231)";

$execute = mysqli_query($conexao, $query);
if($execute){
    echo 'funcionou';
}


$query = "INSERT INTO venda(nome_produto, quantidade, preco,tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('Mesa de jantar', '1', 500.00,'Parcelado', '2023-09-01', 2131)";
$execute = mysqli_query($conexao, $query);
if($execute){
    echo 'funcionou';
}

$query = "INSERT INTO venda(nome_produto, quantidade, preco,tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('Mouse', '3', 200.00,'À Vista', '2022-10-12', 3212)";
$execute = mysqli_query($conexao, $query);
if($execute){
    echo 'funcionou';
}

$query = "INSERT INTO venda(tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('Parcelado', '2023-10-02', 1231)";
$execute = mysqli_query($conexao, $query);
if($execute){
    echo 'funcionou';
}

$query = "INSERT INTO venda(tipo_pagamento, data_venda, numero_nota_fiscal)
 VALUES('À Vista', '2023-02-03', 1231)";
$execute = mysqli_query($conexao, $query);
if($execute){
    echo 'funcionou';
}
*/
?>

