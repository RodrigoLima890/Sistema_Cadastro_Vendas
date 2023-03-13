<?php if (!isset($_GET['editar'])) { ?>
  <h1 class="title">Cadastrar Venda</h1>
  <form method="post" action="../Controller/inserirVenda.php">
    <label for="pagamento">Tipo De Pagamento:</label>
    <select name="pagamento" id="pagamento">
      <option value="avista">À Vista</option>
      <option value="parcelado">Parcelado</option>
    </select>
    <br><br>
    <label for="data">Data:</label>
    <input type="date" id="data" name="data"><br><br>
    <label for="nota-fiscal">Número Nota Fiscal:</label>
    <input type="text" id="nota-fiscal" name="nota-fiscal"><br><br>
    <label for="nome-produto">Nome do Produto:</label>
    <input type="text" id="nome-produto" name="nome-produto"><br><br>
    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade"><br><br>
    <label for="preco">Preço:</label>
    <input type="text" id="preco" name="preco"><br><br>
    <a href="?pagina=main"><input type="submit" value="Adicionar Venda"></a>
  </form>

<?php } else { ?>
  <?php while ($linha = mysqli_fetch_array($consulta)) { ?>
    <?php if ($linha['id'] == $_GET['editar']) { ?>
      <h1 class="title">Editar Venda</h1>
      <form method="post" action="../Controller/editarVenda.php">
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>"/>
        <label for="pagamento">Tipo De Pagamento:</label>
        <select name="pagamento" id="pagamento">
          <option value="avista">À Vista</option>
          <option value="parcelado">Parcelado</option>
        </select>
        <br><br>
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" value="<?php echo $linha['data_venda']; ?>"><br><br>
        <label for="nota-fiscal">Número Nota Fiscal:</label>
        <input type="text" id="nota-fiscal" name="nota-fiscal" value="<?php echo $linha['numero_nota_fiscal']; ?>"><br><br>
        <label for="nome-produto">Nome do Produto:</label>
        <input type="text" id="nome-produto" name="nome-produto" value="<?php echo $linha['nome_produto']; ?>"><br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" value="<?php echo $linha['quantidade']; ?>"><br><br>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" value="<?php echo $linha['preco']; ?>"><br><br>
        <a href="?pagina=main"><input type="submit" value="Editar Venda"></a>
      </form>
    <?php } ?>
  <?php } ?>
<?php } ?>