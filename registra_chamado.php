<?php

echo '<pre>';
print_r ($_POST);
echo '<pre>';

//fopen('arquivo.hd', 'a');

$titulo =  str_replace ('#', '-', $_POST['titulo']);
$categoria = str_replace ('#', '-', $_POST['categoria']);
$descricao = str_replace ('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao;
echo $texto;

/* 
// implode() is used to join array elements
// into a string.
$texto = implode('#', $_POST);
echo $texto;
 */