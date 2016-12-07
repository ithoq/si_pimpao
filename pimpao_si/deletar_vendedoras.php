<?php
$servidor="localhost";
$username="t2g05";
$password="t2g05@10";
$database="t2g05";

$nome = $_GET['id'];

// Create connection
$db = mysqli_connect($servidor,$username,$password,$database);
if (mysqli_connect_errno()) { echo "Erro de conexão!"; exit;}

// sql to delete a record
$sql = "DELETE FROM vendedora WHERE id='".$_GET['id']."'";

if ($db->query($sql) === TRUE) {
    $Message = "Deletado com sucesso!";
    header("Location:listar_vendedoras.php?Message={$Message}");
} else {
    $Message = "Erro na deleção: " . $db->error;
    header("Location:listar_vendedoras.php?Message={$Message}");
}

$db->close();

?>
