<?php


$nome_completo = readline("Digite seu nome completo: ");

print ("Existem ");
print mb_strlen($nome_completo);
print (" caracteres\n");

print mb_strtoupper("$nome_completo\n");
print mb_strtolower("$nome_completo\n");


$fim_nome = mb_strpos($nome_completo, " ");

$primeiro_nome = mb_substr($nome_completo, 0, $fim_nome);

print ("Seu primeiro nome é $primeiro_nome\n");

$novo_nome = str_replace("a", "@", "$nome_completo");
print ("$novo_nome\n");




