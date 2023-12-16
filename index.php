<?php

require_once("config.php");

//CARREGA UM USUÁRIO
/*$root = new Usuario();
$root->loadById(3);
echo $root*/

//CARREGA UMA LISTA DE USUÁRIOS
/*$lista = Usuario::getList();

echo json_encode($lista);*/

/* NÃO USARÁ MAIS
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/ 

//CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
/*$search = Usuario::search("jo");
echo json_encode($search);*/

/*//CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
$usuario = new Usuario();
$usuario->login("root","!@#$%");

echo $usuario;*/

//Criando um novo usuário 
/*$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;

?>