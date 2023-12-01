function toggleForm(formContainerId, buttonId) {
  const formContainer = document.getElementById(formContainerId);
  const button = document.getElementById(buttonId);
  const rect = button.getBoundingClientRect();
  formContainer.style.display = formContainer.style.display === 'none' ? 'flex' : 'none';
  if (formContainer.style.display === 'flex') {
    const leftPosition = rect.left + window.scrollX;
    const topPosition = rect.bottom + window.scrollY;
    formContainer.style.left = leftPosition + 'px';
    formContainer.style.top = topPosition + 'px';
  }
}

// function addToCardsContainer(event, containerId) {
//   event.preventDefault();
//   const form = event.target;
//   const categoria = form.categoria.value;
//   const descripcion = form.descripcion.value;
//   const cardsContainer = document.getElementById(containerId === 'card1' ? 'cardsContainer3' : 'cardsContainer3');
//   const newCard = document.createElement('div');
//   newCard.classList.add('cards');
//   newCard.innerText = `Categoría: ${categoria}\nDescripción: ${descripcion}`;
//   cardsContainer.appendChild(newCard);
//   form.reset();
//   form.style.display = 'none';
// }

/*

function addToCardsContainer(event, containerId) {
  event.preventDefault();

  var form = event.target;
  var formData = new FormData(form);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "add_categoria.php", true);
  xhr.onload = function () {
      if (xhr.status === 200) {
          // La categoría se agregó con éxito, ahora actualiza la sección de cards-container3
          updateCardsContainer3(xhr.responseText);
      } else {
          console.error("Error al agregar la categoría");
      }
  };
  xhr.send(formData);
}

function updateCardsContainer3(response) {
  // Parsea la respuesta JSON del servidor
  var categorias = JSON.parse(response);

  // Limpia el contenido actual de cardsContainer3
  var cardsContainer3 = document.getElementById('cardsContainer3');
  cardsContainer3.innerHTML = '';

  // Agrega las nuevas categorías al contenedor
  categorias.forEach(function (categoria) {
      var newCard = document.createElement('div');
      newCard.classList.add('cards');
      newCard.innerText = `Categoría: ${categoria.nombre}\nDescripción: ${categoria.descripcion}`;
      cardsContainer3.appendChild(newCard);
  });
}
*/
