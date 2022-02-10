<?php

define('HOST', 'localhost'); //Alterar para o IP/Caminho do seu banco de dados
define('USER', 'root'); //Alterar com o nome de usuario do seu banco de dados
define('PASSWORD', ''); //Alterar com a senha do seu banco de dados
define('DBNAME', 'mvc'); //Há não ser que você tenha alterado o nome do banco, não será necessário alterar essa linha.




/*//
NÃO ALTERAR AS PROXIMAS LINHAS
//*/
class Conexao {
    public static $pdo;
    public function __construct(){}
    public function conectar() {
    
    $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    if(is_null(self::$pdo)){
    try {
      self::$pdo = new \PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . ";", USER, PASSWORD, $opcoes);
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   
    }
    
    }
    return (self::$pdo) ? self::$pdo : false;
  }
}   

