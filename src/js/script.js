// Función para crear la sección de detalles
function createDetailsSection(item) {
    const details = document.createElement("div");
    details.classList.add("details");

    // Obtiene la definición y los medios
    const definition = item.getAttribute("data-definition") || "Definición no disponible";
    const mediaType = item.getAttribute("data-type") || "image";
    const src = item.getAttribute("data-src") || "";

    // Agrega la definición como párrafo
    const definitionParagraph = document.createElement("p");
    definitionParagraph.textContent = definition;
    details.appendChild(definitionParagraph);

    // Agrega los medios (imágenes o videos)
    if (mediaType === "image") {
        const images = src.split(",");
        images.forEach(imageSrc => {
            const img = document.createElement("img");
            img.src = imageSrc.trim();
            img.alt = definition;
            img.loading = "lazy"; // Lazy loading para mejorar rendimiento
            details.appendChild(img);
        });
    } else if (mediaType === "video") {
        // Contenedor para hacer el video responsivo
        const videoWrapper = document.createElement("div");
        videoWrapper.classList.add("video-container");

        const iframe = document.createElement("iframe");
        iframe.src = src;
        iframe.frameBorder = "0";
        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
        iframe.allowFullscreen = true;

        videoWrapper.appendChild(iframe);
        details.appendChild(videoWrapper);
    }

    return details;
}

// Función para alternar la visibilidad de los detalles
function toggleDetails(item) {
    let details = item.querySelector(".details");
    if (details) {
        details.style.display = details.style.display === "none" ? "block" : "none";
    } else {
        details = createDetailsSection(item);
        item.appendChild(details);
        details.style.display = "block";
    }
}

// Delegación de eventos para la lista de elementos
document.querySelector("#enfermedades-list").addEventListener("click", (event) => {
    if (event.target.tagName === "LI") {
        toggleDetails(event.target);
    }
});

// Modal para imágenes en tamaño completo
const modal = document.createElement("div");
modal.classList.add("modal");
document.body.appendChild(modal);

const modalImage = document.createElement("img");
modal.appendChild(modalImage);

// Mostrar el modal al hacer clic en una imagen de la galería
document.querySelector("#gallery").addEventListener("click", (event) => {
    if (event.target.tagName === "IMG") {
        modalImage.src = event.target.src;
        modalImage.alt = event.target.alt;
        modal.classList.add("visible");
    }
});

// Cerrar el modal al hacer clic fuera de la imagen
modal.addEventListener("click", () => {
    modal.classList.remove("visible");
});
