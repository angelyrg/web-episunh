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