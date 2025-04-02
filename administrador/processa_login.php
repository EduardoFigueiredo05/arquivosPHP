<?
require_once(conexao.php);

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM administrador WHERE NOME = :nome AND SENHA = :senha";

$query = $pdo->prepare($sql);
$query->bindParam(':nome',$nome, PDO::PARAM_STR);
$query->bindParam(':senha',$senha, PDO::PARAM_STR);

$query->execute();

if($query->rowCount() > 0){
    $_SESSION['admin_logado'] = true;
    header('Location: painel_admin.php');
} else{
    header('Location:login.php?erro');
}

?>