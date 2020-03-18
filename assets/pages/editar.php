<?php
include('conexao.php');

if(isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $nome = addslashes($_POST['nome']);
  $sobrenome = addslashes($_POST['sobrenome']);
  $idade = addslashes($_POST['idade']);

  $sql = $pdo->prepare("UPDATE usuarios SET nome=:nome, sobrenome=:sobrenome, idade=:idade WHERE id=:id");
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':sobrenome', $sobrenome);
  $sql->bindValue(':idade', $idade);
  $sql->bindValue(':id', $id);
  $sql->execute();
  header('Location: ../../index.php');
} else {
  header('Location: ../../index.php');
  die;
}