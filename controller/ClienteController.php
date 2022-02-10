<?php
include 'dao/conexao.php';
include 'dao/ClienteDao.php';
include 'model/ClienteModel.php';


class ClienteController{
    private $clienteDao;
    private $nome;
    private $email;
    private $telefone;


    public function __construct(){
        $this->clienteDao = new ClienteDao();
    }

    function criarTabela(){
        $array = $this->clienteDao->getAll();
            foreach ($array as $key => $value) {
                echo '<tr><nobr>';
                echo "<th scope='row'>".$value['id']."</th>";
                echo "<td>".$value['nome']."</td>";
                echo "<td>".$value['telefone']."</td>";
                echo "<td>".$value['email']."</td>";
                echo '<td>
                <a href="?acao=editar&id='.$value['id'].'">
                  <button class="btn btn-primary" type="button">EDITAR</button>
                </a></td>';
                echo '<td><a href="?acao=excluir&id='.$value['id'].'">
                  <button class="btn btn-danger" type="button">EXCLUIR</button>
                </a>
              </td></nobr></tr>';
            }
    }
    function tabelaBuscar(){
        $array = $this->clienteDao->getBuscar(filter_input(INPUT_GET, 'buscar', FILTER_SANITIZE_SPECIAL_CHARS));
          
        foreach ($array as $key => $value) {
                 echo '<tr>';
                echo "<th scope='row'>".$value['id']."</th>";
                echo "<td>".$value['nome']."</td>";
                echo "<td>".$value['telefone']."</td>";
                echo "<td>".$value['email']."</td>";
                echo '<td>
                <a href="?acao=editar&id='.$value['id'].'">
                  <button class="btn btn-primary" type="button">EDITAR</button>
                </a></td>';
                echo '<td><a href="?acao=excluir&id='.$value['id'].'">
                  <button class="btn btn-danger" type="button">EXCLUIR</button>
                </a>
              </td></tr>';
            
            }
        
            
    }

    function incluirFormulario(){
    $nomeCliente = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefoneCliente = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $emailCliente = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $clienteModel = new ClienteModel($nomeCliente, $telefoneCliente, $emailCliente);
    $clienteModel->setNomeCliente($nomeCliente);
    $clienteModel->setTelefoneCliente($telefoneCliente);
    $clienteModel->setEmailCliente($emailCliente);
    if(filter_input(INPUT_GET, 'status', FILTER_SANITIZE_SPECIAL_CHARS) == "salvar"){
        if(filter_var($emailCliente, FILTER_VALIDATE_EMAIL)){
        $clienteDao = new ClienteDao();
        $clienteDao->insert($clienteModel);
        session_start();
        $_SESSION['status'] = 1;
    }else{$_SESSION['status'] = 0;}
    }
    }
    function excluirCliente(){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $clienteDao = new ClienteDao();
        $clienteDao->delete($id);
        if($clienteDao->delete($id) >0){$_SESSION['status'] = 3;}else{$_SESSION['status'] = 2;}
    }


    function editarFormulario($id){
        
        //Obtem os dados salvos no banco
        $array = $this->clienteDao->getId($id);
        foreach ($array as $key => $value) {
            $nomeCliente = $value['nome'];
            $telefoneCliente = $value['telefone'];
            $emailCliente = $value['email'];
        }
        $clienteModel = new ClienteModel($nomeCliente, $telefoneCliente, $emailCliente);
        //faz os set's no controlador
        $this->nome = $nomeCliente;
        $this->telefone = $telefoneCliente;
        $this->email = $emailCliente;
    
    
        if(filter_input(INPUT_GET, 'status', FILTER_SANITIZE_SPECIAL_CHARS) == "salvar"){
            
                //faz os set's das novas infos na modell
    $clienteModel->setNomeCliente(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
    $clienteModel->setTelefoneCliente(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS));
    $clienteModel->setEmailCliente(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
    
        //atualiza o preenchimento do formulario com os novos dados
        $this->nome = $clienteModel->getNomeCliente();
        $this->telefone = $clienteModel->getTelefoneCliente();
        $this->email = $clienteModel->getEmailCliente();

        if(filter_var(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS), FILTER_VALIDATE_EMAIL)){
            $clienteDao = new ClienteDao();
            $clienteDao->update($clienteModel, $id);

            
        session_start();
        $_SESSION['status'] = 1;
    }
            
    else{$_SESSION['status'] = 0;}
        }
    }

    function getNome(){
        return $this->nome;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function getEmail(){
        return $this->email;
    }


}


?>