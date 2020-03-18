<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Crud - Model</title>
</head>

<body>
  <div class="container">
    <h1>Crud com Modal</h1>
    <form action="adicionar.php" method="post" id="formulario">
      <div class="quadradoInput">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
      </div>

      <div class="quadradoInput">
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" id="sobrenome">
      </div>

      <div class="quadradoInput">
        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade">
      </div>

      <input class="btn" type="submit" value="Adiconar">
    </form>

    <ul class="lista">
      <?php 
        include('lista.php');
        lista();
      ?>
    </ul>
  </div>

  <div class="modalExcluir">
    <div class="close"></div>
    <span>Tem certeza que deseja excluir?</span>
    <button class="confirma"><a href="">sim</a></button>
    <button class="negar">nao</button>
  </div>
  
  <div class="modalEditar">
    <h2>Editar dados</h2>
    <form action="" method="post" class="formEditar">
    <div class="quadradoInput">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
      </div>

      <div class="quadradoInput">
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" id="sobrenome">
      </div>

      <div class="quadradoInput">
        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade">
      </div>

      <input class="btn" type="submit" value="Editar">
    </form>
  </div>

  <script src="assets/js/main.js"></script>
</body>

</html>