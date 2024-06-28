// Получаем элементы DOM
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span1 = document.getElementsByClassName("close")[0];

// При клике на кнопку открываем модальное окно
btn.onclick = function() {
  modal.style.display = "block";
}

// При клике на крестик закрываем модальное окно
span1.onclick = function() {
  modal.style.display = "none";
}

// При клике вне модального окна, закрываем его
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


var modalSend = document.getElementById("myModalSend");
var btnSend = document.getElementById("openModalBtnSend");
var btnSend2 = document.getElementById("openModalBtnSend2");
var span2 = document.getElementsByClassName("close")[1];

// При клике на кнопку открываем модальное окно
btnSend.onclick = function() {
  modalSend.style.display = "block";
}

btnSend2.onclick = function() {
  modalSend.style.display = "block";
}

// При клике на крестик закрываем модальное окно
span2.onclick = function() {
  modalSend.style.display = "none";
}

// При клике вне модального окна, закрываем его
window.onclick = function(event) {
  if (event.target == modalSend) {
    modalSend.style.display = "none";
  }
}


