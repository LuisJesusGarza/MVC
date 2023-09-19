document.addEventListener("DOMContentLoaded", function() {
    const quizForm = document.getElementById("quizForm");
    
    quizForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de inmediato
        
        // Realiza validaciones aquí
        const respuestas = quizForm.querySelectorAll("input[type=radio]:checked");
        if (respuestas.length !== 3) {
            alert("Por favor, responde todas las preguntas.");
            return;
        }

        // Si todas las preguntas están respondidas, puedes enviar el formulario
        quizForm.submit();
    });
});