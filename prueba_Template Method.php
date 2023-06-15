<?php

// Clase abstracta que representa un juego
abstract class Game {
    // Método principal que orquesta el juego
    final public function play() {
        $this->initialize();
        $this->start();
        $this->end();
    }

    // Métodos abstractos que deben ser implementados por las subclases
    abstract protected function initialize();
    abstract protected function start();
    abstract protected function end();
}

// Subclase que representa un juego de fútbol
class Football extends Game {
    protected function initialize() {
        echo "Inicializando el juego de fútbol...\n";
    }

    protected function start() {
        echo "Comienza el juego de fútbol.\n";
    }

    protected function end() {
        echo "Finaliza el juego de fútbol.\n";
    }
}

// Subclase que representa un juego de baloncesto
class Basketball extends Game {
    protected function initialize() {
        echo "Inicializando el juego de baloncesto...\n";
    }

    protected function start() {
        echo "Comienza el juego de baloncesto.\n";
    }

    protected function end() {
        echo "Finaliza el juego de baloncesto.\n";
    }
}

// Ejemplo de uso
$footballGame = new Football();
$footballGame->play();

echo "\n";

$basketballGame = new Basketball();
$basketballGame->play();
?>

