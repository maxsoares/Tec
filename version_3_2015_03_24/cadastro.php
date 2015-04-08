<?php
    $root = getcwd();    
    include ''.$root.'/trabalho/include/inc_head.php';
    include ''.$root.'/trabalho/include/inc_menu.php';
?>

<h3>Cadastro de Produtos</h3>
Solicitação do trabalho prático - Item 2 - C - i
<br><br>
<h2>Lista de Produtos Cadastrados</h2>
<?php include_once ''.$root.'/trabalho/include/inc_cadastro.php'; ?>

<div id="proposito">Propósito: Página que contém informações dos produtos já cadastrados e possibilidade de criar, editar e excluir</div>   
<?php include ''.$root.'/trabalho/include/inc_foot.php'; ?>