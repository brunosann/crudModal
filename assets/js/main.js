//excluir item
const botaoExcluir = document.querySelectorAll('.excluir');
const modalExcluir = document.querySelector('.modalExcluir');
const confirmado = document.querySelector('.confirma a');

function excluir(event) {
  event.preventDefault();
  const id = event.target.getAttribute('href');
  confirmado.setAttribute('href', 'assets/pages/delete.php?id='+id);
  modalExcluir.style.display = 'block';
}

botaoExcluir.forEach((item) => {
  item.addEventListener('click', excluir);
});

//editar item
const botaoEditar = document.querySelectorAll('.editar');
const modalEditar = document.querySelector('.modalEditar');
const confirmaEdicao = document.querySelector('.formEditar');

const campoNome = confirmaEdicao.querySelector('#nome');
const campoSobrenome = confirmaEdicao.querySelector('#sobrenome');
const campoIdade = confirmaEdicao.querySelector('#idade');

function editar(event) {
  event.preventDefault();
  const id = event.target.getAttribute('href');
  confirmaEdicao.setAttribute('action', `assets/pages/editar.php?id=${id}`);

  //pegando os texto ja preenchidos da lista para ponhar no formulario de EDITAR
  //event.target = pega o botao editar, parentElement = pega o elemento pai (li), children pega os filhos do li
  const nome = event.target.parentElement.children[0].innerText; 
  const sobrenome = event.target.parentElement.children[1].innerText;
  const idade = event.target.parentElement.children[2].innerText;

  campoNome.setAttribute('value', nome);
  campoSobrenome.setAttribute('value', sobrenome);
  campoIdade.setAttribute('value', idade);

  modalEditar.style.display = 'block';
}
botaoEditar.forEach((item) => {
  item.addEventListener('click', editar);
});

//fechar modal
const botaoClose = document.querySelectorAll('.close');
const botaoNegar = document.querySelector('.negar');

botaoNegar.addEventListener('click',() => modalExcluir.style.display = 'none')

function fechar(event) {
  modalEditar.style.display = 'none';
  modalExcluir.style.display = 'none';
}
botaoClose.forEach((item) => {
  item.addEventListener('click', fechar);
});