<?php

require_once 'Pessoa.php';
require_once 'Enums/Status.php';

class Carreira extends Pessoa
{
    public $profissao;   
    public $empresa;
    public StatusCarreira $status;

    public function __construct($nome, $profissao, $empresa, $status) {
        parent::__construct($nome);
        $this->profissao = $profissao;
        $this->empresa = $empresa;
        $this->status = $status;
    }

    public function cargo() {
        echo "no cargo de {$this->profissao} na empresa {$this->empresa}, se encontra no status {$this->status->value}.";
    }
}
