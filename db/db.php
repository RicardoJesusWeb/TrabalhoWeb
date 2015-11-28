<?php
class DB{
	private $host = "127.0.0.1";
	private $dbname = "mydb";
	private $user = "root";
	private $pass = "";
	private $db;
	
	function __construct() {
		return $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';', $user, $pass);
	}
	
	function insert($tabela, $dados){
		return $db->exec('INSERT INTO '.$tabela.' VALUES ('.$dados.');');
	}
	
	function update($tabela, $id, $dados){
		return $db->exec('UPDATE '.$tabela.' SET '.$dados.' WHERE id = '.$id.';');
	}
	
	function del($tabela, $id, $dados){
		return $db->exec('DELETE FROM '.$tabela.' WHERE id = '.$id.';');
	}
	
	function query($query){
		return $db->exec($query);
	}
}


$stmt = $db->query('SELECT "Produto" as classname, idproduto, nome, infadicionais, preco FROM produto');
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_CLASSTYPE);

$stmt = $db->prepare('SELECT * FROM produto WHERE idproduto = :id');
$id = $rows[0]->getId();
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

//$row = $stmt->fetch(PDO::FETCH_CLASS, 'Produto');

var_dump($rows);

