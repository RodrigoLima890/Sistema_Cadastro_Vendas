<table class="table table-hover table-striped" id="myTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Data</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Pagamento</th>
      <th>Nota Fiscal</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta)) {
      echo '<tr><td>' . $linha['id'] . '</td>';
      echo '<td>' . $linha['data_venda'] . '</td>';
      echo '<td>' . $linha['nome_produto'] . '</td>';
      echo '<td>' . $linha['quantidade'] . '</td>';
      echo '<td>R$' . $linha['preco'] . '</td>';
      echo '<td>' . $linha['tipo_pagamento'] . '</td>';
      echo '<td>' . $linha['numero_nota_fiscal'] . '</td>';
    ?>
      <td><a href="?pagina=cadastrarVenda&editar=<?php echo $linha['id']; ?>">Editar</a></td>

      <td><a href="../Controller/deletarVenda.php?id_venda=<?php echo $linha['id']; ?>">Deletar</a></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<script src="./js/jquery.js"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable({
      language: {
        lengthMenu: 'Vendas Por Página _MENU_ ',
        zeroRecords: 'Nada Aqui!',
        info: 'Mostrando _PAGE_ De _PAGES_ Páginas',
        infoEmpty: 'Nada Aqui!',
        infoFiltered: '(filtered from _MAX_ total records)',
        search: "Pesquisar:",
        paginate: {
          first: "Primeiro",
          last: "Ultimo",
          next: "Proximo",
          previous: "Anterior"
        }
      },
    });
  });
</script>
</div>
</body>

</html>