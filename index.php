<?php

require_once("config.php");

//Carrega um usuário
// $root = new Usuario();
// $root->loadById((3));
// echo $root;

//Carrega lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("ro");
// echo json_encode($search);

//Carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("root", "1234");

echo $usuario;



?>