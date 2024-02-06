function showPopup(message) {
    var popup = document.createElement("div");
    popup.className = "popup";
    popup.innerHTML = "<p>" + message + "</p>";
    document.body.appendChild(popup);

    setTimeout(function() {
        document.body.removeChild(popup);
    }, 3000); // La ventana emergente se ocultará después de 3 segundos (puedes ajustar este tiempo)
}

// Llamada a la función al cargar la página (puedes ajustar este mensaje)
showPopup("El cliente ha reservado el evento");