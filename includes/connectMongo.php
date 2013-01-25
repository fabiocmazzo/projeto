<?php
 require_once 'class.Db.php';
 
try
{
	$mongo = new MongoClient(); // connect
	$dbMongo = $mongo->selectDB("local");
} catch (Exception $e) {
	$sql = 'insert into log(error_msg) values ("erro de conexao")';
	$db->query($sql);
}
 