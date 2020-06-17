<?php

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome_produto = mysqli_escape_string($connect, $_POST['nome_produto']);
    $modelo_produto = mysqli_escape_string($connect, $_POST['modelo_produto']);
    $ano_produto = $_POST['ano_produto'];
    $especificacoes_produto = mysqli_escape_string($connect, $_POST['especificacoes_produto']);

    $sql = " INSERT INTO produtos (nome, modelo, ano, especificacoes) VALUES ('$nome_produto', '$modelo_produto', $ano_produto, '$especificacoes_produto')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../dashboard_cadastrar.php?sucesso');
    else:
        header('Location: .../dashboard_cadastrar.php?erro');
    endif;
endif;
?>