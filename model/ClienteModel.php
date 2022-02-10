<?php
class ClienteModel {
    private $nomeCliente;
    private $telefoneCliente;
    private $emailCliente;

function __construct($nomeCliente, $telefoneCliente, $emailCliente) {
    $this->nomeCliente = $nomeCliente;
    $this->telefoneCliente = $telefoneCliente;
    $this->emailCliente = $emailCliente;
}

public function getNomeCliente() {
    return $this->nomeCliente;
}
public function setNomeCliente($nomeCliente) {
    $this->nomeCliente = $nomeCliente;
}

public function getTelefoneCliente() {
    return $this->telefoneCliente;
}
public function setTelefoneCliente($telefoneCliente) {
    $this->telefoneCliente = $telefoneCliente;
}

public function getEmailCliente() {
    return $this->emailCliente;
}
public function setEmailCliente($emailCliente) {
    $this->emailCliente = $emailCliente;
}

}