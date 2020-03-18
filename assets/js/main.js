const botaoExcluir = document.querySelectorAll('.excluir');
const modal = document.querySelector('.modal');
const confirmado = document.querySelector('.confirma a');

function excluir(event) {
  event.preventDefault();
  const id = event.target.getAttribute('href');
  confirmado.setAttribute('href', `delete.php?id=${id}`);
  modal.style.display = 'block';
}

botaoExcluir.forEach((item) => {
  item.addEventListener('click', excluir);
});