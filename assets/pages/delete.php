<?php
include('conexao.php');
$id = addslashes($_GET['id']);
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $sql = $pdo->prepare("DELETE FROM usuarios WHERE id=:id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  header('Location: ../../index.php');
} else {
  header('Location: ../../index.php');
  die;
}

?>