<?php
$servidor="localhost";
$username="root";
$password="";
$database="si_pimpao";

$nome = $_GET['id'];

// Create connection
$db = mysqli_connect($servidor,$username,$password,$database);
if (mysqli_connect_errno()) { echo "Erro de conexão!"; exit;}

// sql to delete a record
$sql = "DELETE FROM produto WHERE id='".$_GET['id']."'";

if ($db->query($sql) === TRUE) {
    $Message = "Deletado com sucesso!";
    header("Location:listar_produtos.php?Message={$Message}");
} else {
    $Message = "Erro na deleção: " . $db->error;
    header("Location:listar_produtos.php?Message={$Message}");
}

$db->close();

?>
