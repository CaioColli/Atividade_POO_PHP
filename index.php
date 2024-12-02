<?php

require_once 'Classes/Pessoa.php';
require_once 'Classes/Carreira.php';
require_once 'Enums/Status.php';

$funcionario = new Carreira("Caio", "Desenvolvedor", "Hackers", StatusCarreira::Trabalhando);

echo $funcionario->mensagem() . " ";
echo $funcionario->cargo();
