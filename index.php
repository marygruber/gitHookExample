<?php
/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
include '/Controller/Controller.php';
include '/View/View.php';
include '/Model/Model.php';

/* Pega a ação passada pela URL*/
$acao = $_GET['acao'];

/* Valida a ação passada, verifica se ela existe e se ela e o login 
 * Se a ação for exisir e for login inicia a função login do Controller
 * Se não inicia a função login da View*/
if(isset($acao) && $acao == 'login'){
	$controller = new Controller();
	$controller->login();
}else{
	$view = new View();
	$view->login(); 
}	
?>
