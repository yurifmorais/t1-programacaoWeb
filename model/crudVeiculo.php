<?php
include 'conexaoBD.php';

function cadastrarVeiculo($modelo, $valor, $km)
{
    connect();
    query("INSERT INTO veiculo (modelo, valor, km)
          VALUES ('$modelo', $valor, $km)"); //POR TER LETRAS, A DESCRICAO TEM QUE ESTAR ENTRE''
    close();
}

function mostrarVeiculos()
{
    connect();
    $consulta = query("SELECT * FROM veiculo");
    close();
    $resultados = [];
    if (mysqli_num_rows($consulta) > 0) {
        while ($resultadoSeparado = mysqli_fetch_assoc($consulta)) {
            $resultados[] = $resultadoSeparado;
        }
    }
    return $resultados;
}

function mostrarVeiculoAlterar($codigo)
{
    connect();
    $consulta = query("SELECT * FROM veiculo where codigo = $codigo");
    close();
    $resultadoSeparado = mysqli_fetch_assoc($consulta);
    return $resultadoSeparado;
}

function alterarVeiculo($codigo, $modelo, $valor, $km)
{
    connect();
    query("UPDATE veiculo SET modelo = '$modelo', valor = $valor, km = $km WHERE codigo = $codigo");
    close();
}

function excluirVeiculo($codigo)
{
    connect();
    query(" DELETE FROM veiculo
    WHERE codigo = $codigo");
    close();
}
