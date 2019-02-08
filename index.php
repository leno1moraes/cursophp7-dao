<?php 

require_once("config.php");


//$sql = new Sql();
//$usuario = $sql->select("SELECT * FROM tb_usuario");
//echo json_encode($usuario);


//Carrega um usuario
//$user = new Usuario();
//$user->loadById(3);
//echo $user;


//Carrega uma lista de usuarios
//$lista  = Usuario::getList();	
//echo json_encode($lista);


//Pesquisa usuarios pelo login
//$search = Usuario::search("Te");
//echo json_encode($search);


//Login do usuario (login e senha)
//$usuario = new Usuario();
//$usuario->login("Leno","#@%%12456");
//echo $usuario;

//Inserindo registro
//$user = new Usuario();
//$user->setDeslogin("aluno");
//$user->setDessenha("#%¨&4576");
//$user->insert();
//echo $user;

$user = new Usuario();
$user->loadById(5);
$user->update("professor", "!Q@W¨Y&U8");
echo $user;

?>