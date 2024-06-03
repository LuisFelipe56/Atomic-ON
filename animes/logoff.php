<?php
    /*
    remover índices de arrays de sessão
    urset(): função nativa do PHP que destrói a posição do array em questão a variável informado, eliminando duas informações da memória do servidor PHP. 

    • destruir a variavel de sessão
    session_destroy(): remove todos os índices contidop dentro da superglobaçl SESSION



    

    print_r($_SESSION);
    */
    session_start();
    session_destroy();
    header("Location:index.php");
    
   
?>