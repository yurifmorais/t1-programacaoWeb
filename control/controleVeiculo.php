<?php
include '../model/crudVeiculo.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        cadastrarVeiculo($_POST["modelo"], $_POST["valor"], $_POST["km"]);
        header("Location: ../view/cadastrarVeiculo.php");
        break;

    case 'Alterar':
        alterarVeiculo($_POST["codigo"], $_POST["modelo"], $_POST["valor"], $_POST["km"]);
        header("Location: ../view/mostrarVeiculo.php");
        break;

    case 'Excluir':
        excluirVeiculo($_POST["codigo"]);
        header("Location: ../view/mostrarVeiculo.php");
        break;
}
