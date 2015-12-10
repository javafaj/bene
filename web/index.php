<?php require_once("../class/Funcionario.php"); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>teste</title>
    </head>
    <body>
        <?php
        echo "hello word";
        
        $pessoa = new Funcionario();
        $pessoa->nome = "Pagotto";
        
        echo $pessoa->setNome("puto");
        echo $pessoa->getNome();        
        
        ?>
    </body>
</html>
