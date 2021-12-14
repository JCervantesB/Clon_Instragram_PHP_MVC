<?php

namespace Usuario\ClonInstragram\lib;

class View {

    function render(string $nombre, array $data = []) {
        $this->d = $data;
        require 'src/views/' . $nombre . '.php';
    }
}