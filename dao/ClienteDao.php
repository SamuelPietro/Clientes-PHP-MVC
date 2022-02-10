<?php

class ClienteDao
{
    //BUSCAR TODOS OS CLIENTES
    public function getAll()
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        $stmt = $pdo->prepare("SELECT * FROM clientes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //BUSCAR UM UNICO CLIENTE
    public function getId($id)
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        //BUSCAR TODOS TERMOS
    public function getBuscar($busca)
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%$busca%' OR email LIKE '%$busca%' OR id = :id");
        $stmt->execute(["id" => $busca]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    //ADICIONAR NOVO CLIENTE
    public function insert(ClienteModel $clienteModel)
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        $stmt = $pdo->prepare(
            "INSERT INTO clientes (nome,telefone,email) VALUES(:nome,:telefone,:email)",
        );
        $stmt->execute([
            ":nome" => $clienteModel->getNomeCliente(),
            ":telefone" => $clienteModel->getTelefoneCliente(),
            ":email" => $clienteModel->getEmailCliente(),
        ]);
    }
    //ATUALIZAR UM CLIENTE
    public function update(ClienteModel $clienteModel, $id)
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        $stmt = $pdo->prepare(
            "UPDATE clientes SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id",
        );
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $nome = $clienteModel->getNomeCliente();
        $telefone = $clienteModel->getTelefoneCliente();
        $email = $clienteModel->getEmailCliente();
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
    }
    //EXCLUIR UM CLIENTE
    public function delete($id)
    {
        $conn = new Conexao();
        $pdo = $conn->conectar();
        //$pdo = Conexao::conectar();
        $stmt = $pdo->prepare("DELETE FROM clientes WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
