<?php 

    $materias = ["Estrutura de dados II", "Banco de Dados II", "Programacao Web", "Engenharia de Dados II"];
    $professores = ["Bastos", "Marco", "Cleber", "Julliano"];

    for ($i = 1 ; $i <= 3; $i++) {
     echo $materias[$i] . ' Professor: ' .$professores[$i] . '<br>';
    }
 