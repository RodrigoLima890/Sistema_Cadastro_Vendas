<?php
//base de dados
include '../Model/bd.php';

// cabeçalho
include 'header.php';

if(isset( $_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'main';
}

if($pagina == 'cadastrarVenda'){
    include 'cadastroVenda.php';
}else{
    include 'main.php';
}
//se o projeto ficar maior trocaria esse if-else por switch-case

?>