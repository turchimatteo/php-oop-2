<?php
class User {
    public $nome;
    public $cognome;
    public $email;
    public $età;
    protected $carrello = [];
    public $sconto = 0;

    public function __construct($_nome, $_cognome, $_email) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        public $età;
    }

    public function aggiungiProdotto($prodotto) {
        $this->carrello[] = $prodotto;
    }

    public function getCarrello() {
        return $this->carrello;
    }

    public function getFullName() {
        return $this->nome . ' ' . $this->cognome;
    }
}
?>