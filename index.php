<?php
session_start();
ini_set('display_errors', true);
        error_reporting(E_ALL);
        
        
        
include 'view/header.php';
require 'controller/ClienteController.php';




if(filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS)){
          $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
          $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
      }else {
    $acao = "listar";
    $id = 0;
}

      if(filter_input(INPUT_GET, 'buscar', FILTER_SANITIZE_SPECIAL_CHARS)){
        include 'view/BuscaView.php';
    }
if($acao == "listar"){
    include 'view/ClienteView.php';
    unset($_SESSION['status']);

}elseif($acao == "incluir"){
    include 'view/IncluirClienteView.php';

}elseif($acao == "editar"){
    include 'view/EditarClienteView.php';

}elseif($acao == "excluir"){
    $controller = new ClienteController(); 
    $controller->excluirCliente($id);
    include 'view/ClienteView.php';
}

    
include 'view/footer.php';

