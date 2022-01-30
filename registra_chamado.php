<?php

echo '<pre>';
print_r ($_POST);
echo '<pre>';

//estamos trabalhando na montagem do texto
$titulo =  str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

    
 $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
 
/* 
// implode() is used to join array elements
// into a string.
$texto = implode('#', $_POST);
echo $texto;
 */

//abrindo o arquivo 
$arquivo = fopen('arquivo.hd', 'a');
//escrevendo no arquivo
fwrite($arquivo, $texto );
//fechando o arquivo
fclose($arquivo);

//echo $texto;

header('Location: abrir_chamado.php');

