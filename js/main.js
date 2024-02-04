document.getElementById('imagen').addEventListener('change', function (event) {
    const fileInput = event.target;
    const files = fileInput.files;

    if (files.length > 0) {
        const selectedImage = files[0];
        const imageUrl = URL.createObjectURL(selectedImage);

        // Crear un elemento de imagen y agregarlo al contenedor
        const imageElement = document.createElement('img');
        imageElement.src = imageUrl;
        imageElement.classList.add('object-contain'); // Puedes ajustar las clases según sea necesario
        

        document.getElementById('imagenContainer').innerHTML = ''; // Limpiar el contenedor antes de agregar una nueva imagen
        document.getElementById('imagenContainer').appendChild(imageElement);
    }
});