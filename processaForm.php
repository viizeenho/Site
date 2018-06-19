<?php

include_once('conexao.php');

$nome= $_POST['nome'];
$telefone= $_POST['telefone'];
$email= $_POST['email'];
$msg= $_POST['msg'];

$sql = mysqli_query($conexao,"INSERT INTO cliente(nome, telefone, email, mensagem)VALUES('$nome','$telefone','$email', '$msg')");


if(!$conexao){
	print("falha na conexao");

}else{
	print("sucesso");
}

?>