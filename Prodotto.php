<?php
class Prodotto {
    public $marca;
    public $modello;
    public $memoria;
    public $prezzo;

    public function __construct($_marca, $_modello, $_prezzo) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->memoria = $_memoria;
        $this->prezzo = $_prezzo;
    }
}
?>