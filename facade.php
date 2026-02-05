<?php

// Subsystem classes
class Amplifier {
    public function on() {
        echo "Amplifier is ON\n";
    }
    public function setVolume($level) {
        echo "Amplifier volume set to $level\n";
    }
}

class DVDPlayer {
    public function on() {
        echo "DVD Player is ON\n";
    }
    public function play($movie) {
        echo "Playing movie: $movie\n";
    }
}

class Projector {
    public function on() {
        echo "Projector is ON\n";
    }
    public function wideScreenMode() {
        echo "Projector in widescreen mode\n";
    }
}

class HomeTheaterFacade {
    private $amp;
    private $dvd;
    private $projector;

    public function __construct(Amplifier $amp, DVDPlayer $dvd, Projector $projector) {
        $this->amp = $amp;
        $this->dvd = $dvd;
        $this->projector = $projector;
    }

    public function watchMovie($movie) {
        echo "Get ready to watch a movie...\n";
        $this->amp->on();
        $this->amp->setVolume(5);
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie() {
        echo "Shutting movie theater down...\n";
       
    }
}

$amp = new Amplifier();
$dvd = new DVDPlayer();
$projector = new Projector();

$homeTheater = new HomeTheaterFacade($amp, $dvd, $projector);
$homeTheater->watchMovie("Inception");
$homeTheater->endMovie();

