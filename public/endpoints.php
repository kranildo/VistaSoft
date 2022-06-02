<?php
//segurança sem autenticação só para teste 
$retorno['version'] = "0.0.1";
$retorno['message'] = "Acessou Backend.";
$retorno['request'] = $_POST;
if (isset($_POST["rota"])) {
    if ($_POST["rota"] == 'locatarios') {
        include_once "controles/Locatarios.php";
        $rota = new Locatarios();
        if ($_POST["metodo"] == 'cadastrar') {
            $retorno = $rota->cadastrar($retorno);
        }
        if ($_POST["metodo"] == 'editar') {
            $retorno = $rota->editar($retorno);
        }
        if ($_POST["metodo"] == 'buscar') {
            $retorno = $rota->buscar($retorno);
        }
        if ($_POST["metodo"] == 'excluir') {
            $retorno = $rota->excluir($retorno);
        }
    }    
    if ($_POST["rota"] == 'locadores') {
        include_once "controles/Locadores.php";
        $rota = new Locadores();
        if ($_POST["metodo"] == 'cadastrar') {
            $retorno = $rota->cadastrar($retorno);
        }
        if ($_POST["metodo"] == 'editar') {
            $retorno = $rota->editar($retorno);
        }
        if ($_POST["metodo"] == 'buscar') {
            $retorno = $rota->buscar($retorno);
        }
        if ($_POST["metodo"] == 'excluir') {
            $retorno = $rota->excluir($retorno);
        }
    }
}
echo json_encode($retorno);
