document.addEventListener("DOMContentLoaded", () => {
  // Array inicial de tareas
  const tareas = [];

  // Elementos del DOM
  const listaTareas = document.getElementById("listaTareas");
  const formulario = document.getElementById("formulario");
  const inputTarea = document.getElementById("TextoTarea");

  // Función para renderizar las tareas
  function renderTareas() {
    listaTareas.innerHTML = "";
    tareas.forEach((tarea, index) => {
      const li = document.createElement("li");
      li.textContent = tarea.texto;

      // Checkbox para marcar como realizada
      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.checked = tarea.realizada;
      checkbox.addEventListener("change", () => toggleTarea(index));

      li.prepend(checkbox);

      // Usar clase en lugar de style.textDecoration
      if (tarea.realizada) {
        li.classList.add("realizada");
      } else {
        li.classList.remove("realizada");
      }

      listaTareas.appendChild(li);
    });
  }

  // Función para alternar el estado de realizada
  function toggleTarea(index) {
    tareas[index].realizada = !tareas[index].realizada;
    renderTareas();
  }

  // Función para añadir una nueva tarea
  function addTarea(event) {
    const nuevoTexto = inputTarea.value.trim();
    event.preventDefault();
    console.log(nuevoTexto);
    tareas.push({ texto: nuevoTexto, realizada: false });
    inputTarea.value = "";
    renderTareas();

    console.log(tareas);
  }

  // Eventos
  formulario.addEventListener("submit", addTarea);

  // Render inicial
  renderTareas();
});
