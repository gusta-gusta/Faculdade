<?php

require_once 'sonora.php';

class Animal {};
class Cachorro extends Animal implements Sonora{
    public function emitirSom(){
        echo("<h2>Au-Au</h2>");

    }
}