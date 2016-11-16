<?php
$servidor="localhost";
$username="root";
$password="";
$database="si_pimpao";

$nome = $_GET['nome'];

$db = mysqli_connect($servidor,$username,$password,$database);
if (mysqli_connect_errno()) { echo "Erro de conexão!"; exit;}

$sql = "DELETE FROM produto WHERE nome = 'produto3'";
// mysql_select_db('si_pimpao');
$query = mysqli_query($db,$sql);

if(!$query) {
  die('Could not delete data: ' . mysql_error());
}

echo "Deleted data successfully\n";
header("Location:listar_produtos.php");
?>
