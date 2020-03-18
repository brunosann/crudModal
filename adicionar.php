<?php
include('conexao.php');

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$idade = addslashes($_POST['idade']);

if (!empty($nome) && !empty($sobrenome) && !empty($idade)) {

  $sql = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade) ");
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':sobrenome', $sobrenome);
  $sql->bindValue(':idade', $idade);
  $sql->execute();
  header('Location: index.php');
} else {
  header('Location: index.php');
  die;
}
?>
<script src="assets/js/main.js"></script>