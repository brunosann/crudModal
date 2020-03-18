<?php
function lista() {
  include('conexao.php');

  $sql = $pdo->prepare("SELECT * FROM usuarios");
  $sql->execute();

  if($sql->rowCount() > 0) {
    $dados = $sql->fetchAll();
    foreach($dados as $d) {
      ?>
        <li>
          <span class="nome"><?php echo $d['nome'] ?></span>
          <span class="sobrenome"><?php echo $d['sobrenome'] ?></span>
          <span class="idade"><?php echo $d['idade'] ?></span>
          <button class="editar">Editar</button>
          <button class="excluir"><a href="<?php echo $d['id'] ?>">Excluir</a></button>
        </li>
      <?php
    }
  } else {
    ?>
      <div class="semDados">Adicione seu Primeiro dado...</div>
    <?php
  }
}
?>
