<?php 

session_start();

$caminho_absoluto = dirname(__FILE__ ).DIRECTORY_SEPARATOR;
define('ROOT_DIR' , $caminho_absoluto);

$base_url = 'http://localhost/web.pc/';
define('BASE_URL', $base_url);

global $pdo; 
try {
    $pdo = new PDO("mysql:dbname=agendacambui;host=localhost", "root", "");
} catch(PDOException $e) {
    echo "FALHOU:".$e->getMessage();
}
?>