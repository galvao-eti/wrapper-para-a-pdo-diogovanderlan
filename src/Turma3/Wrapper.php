<?php //declare(strict_types = 1);
namespace Turma3;

use Turma3\Config;
use Turma3\Base;


	class Wrapper {
		public $dbh;
		public function __construct()
		{
			$config = new Config('mysql', 'localhost', 3306, 'vanderlan', 'root', '');
			$this->dbh = new Base($config);
		}
		public function __destruct()
		{
			$this->dbh->desconectar();
		}
		public function include($categoria)
		{
			$sql = "INSERT INTO categoria (nome) VALUES (:categoria)";
			$stmt = $this->dbh->preparar($sql);
			$stmt->bindParam(':categoria', $categoria, \PDO::PARAM_STR);
			$stmt->execute();
		}
	}