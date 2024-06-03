<?php
session_start();


//Variável que verifica se a autenticação foi realizada

$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = [1 => 'Administrativo', 2 => 'Usuário'];
//usuarios do sistema
$usuario_app = [
    ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1 ],
    ['id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2 ],
    ['id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2 ]
];
/*
echo '<pre>';
print_r($usuario_app);
echo '</pre>';
*/


// Verificarse os dados informados no formulario são iguais aos declarados

foreach($usuario_app as $user){
    /*
    echo 'Usuário app: ' . $user['email']. '/' . $user ['senha'];
    echo '<br>';
    echo 'Usuário form: ' . $_POST['email']. '/' . $_POST ['senha'];
    echo '<hr>';
    */
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}
    if ($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location:home.php');
    } else{
    // echo 'Erro na autenticação do usuário';
    //header => redireciona para uma pagina especifica
    $_SESSION['autenticado'] = 'NÃO';
    header('location:index.php?login=erro');
    }


?>