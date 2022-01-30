<?php
session_start();

/* echo '<pre>';
print_r($_SESSION);
echo '<pre>'; */

//remover indices do array de sessão
//unset()
//ou
//destruir as variaveis de sessão
//session_destroy()

session_destroy();
header('Location: index.php');

?>


