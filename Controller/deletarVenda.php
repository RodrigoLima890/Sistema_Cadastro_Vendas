<?php

include '../Model/bd.php';

$id_venda = $_GET['id_venda'];

$query = "DELETE FROM venda WHERE id = $id_venda";

mysqli_query($conexao, $query);

header('Location: ../view/index.php');

?>