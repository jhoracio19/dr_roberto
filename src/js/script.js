// 
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

    // Procesar los archivos
    const sources = src.split(",").map(s => s.trim());

    if (mediaType === "video" && sources.length > 0) {
        // El primer elemento será el video
        const videoSrc = sources[0];
        
        const videoWrapper = document.createElement("div");
        videoWrapper.classList.add("video-container");

        const video = document.createElement("video");
        video.controls = true;
        video.src = videoSrc;
        videoWrapper.appendChild(video);

        details.appendChild(videoWrapper);

        // Si hay imágenes después del video, agregarlas
        const images = sources.slice(1);
        images.forEach(imageSrc => {
            const img = document.createElement("img");
            img.src = imageSrc;
            img.alt = definition;
            img.loading = "lazy";
            details.appendChild(img);
        });
    } else {
        // Si no es video, asumir que son solo imágenes
        sources.forEach(imageSrc => {
            const img = document.createElement("img");
            img.src = imageSrc;
            img.alt = definition;
            img.loading = "lazy";
            details.appendChild(img);
        });
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
