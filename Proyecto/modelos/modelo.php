<?php
class Modelo {
    public function calcularPuntaje($respuestas) {
        // Define las respuestas correctas
        $respuestasCorrectas = [
            "respuesta1" => "verdadero",
            "respuesta2" => "falso",
            "respuesta3" => "verdadero"
        ];

        // Inicializa el puntaje
        $puntaje = 0;

        // Compara las respuestas del usuario con las respuestas correctas
        foreach ($respuestas as $pregunta => $respuestaUsuario) {
            if (isset($respuestasCorrectas[$pregunta]) && $respuestaUsuario === $respuestasCorrectas[$pregunta]) {
                $puntaje++;
            }
        }

        return $puntaje;
    }
}
?>