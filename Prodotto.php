<?php
require_once __DIR__ . '/Disponibilit%C3%A0.php';
class Prodotto {
    public $marca;
    public $modello;
    public $memoria;
    public $prezzo;
    use Disponibilità;
    public function __construct($_marca, $_modello, $_memoria, $_prezzo) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->memoria = $_memoria;
        $this->prezzo = $_prezzo;
    }
}
?>