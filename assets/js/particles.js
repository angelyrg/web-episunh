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