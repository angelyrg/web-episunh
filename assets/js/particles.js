particlesJS('particles-container', {
    "particles": {
        "number": {
            "value": 50, // Cantidad de partículas
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff" // Color de las partículas
        },
        "shape": {
            "type": "circle", // Forma de las partículas (puedes usar "circle", "edge", "triangle", etc.)
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
        },
        "opacity": {
            "value": 0.5, // Opacidad de las partículas
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3, // Tamaño de las partículas
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150, // Distancia entre partículas
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        }
    }
});


const phrases = ["Desarrollo de software", "Redes y Telecomunicaciones", "Gestión de Proyectos"];
let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeText() {
    const textElement = document.getElementById("efecto_escritura");
    const currentPhrase = phrases[phraseIndex];
    const typingSpeed = 100; // Velocidad de escritura en milisegundos

    if (!isDeleting && charIndex < currentPhrase.length) {
        textElement.textContent += currentPhrase.charAt(charIndex);
        charIndex++;
        setTimeout(typeText, typingSpeed);
    } else if (isDeleting && charIndex > 0) {
        textElement.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
        setTimeout(typeText, typingSpeed / 2); // Velocidad de borrado más rápida
    } else {
        isDeleting = !isDeleting;
        if (isDeleting) {
            setTimeout(typeText, 500); // Pausa después de borrar
        } else {
            phraseIndex++;
            if (phraseIndex >= phrases.length) {
                phraseIndex = 0; // Vuelve al inicio del bucle
            }
            setTimeout(typeText, 1000); // Pausa antes de escribir la siguiente frase
        }
    }
}

// Iniciar el efecto de texto
typeText();