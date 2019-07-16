<?php

    // file_put: primeiro parâmetro: nome do arquivo, segundo parâmetro: o que eu quero escrever;
    // o arquivo é criado através do PUT caso não exista;
    // é uma função que recebe os parâmetros e retorna o valor;
    // retorna o conteúdo como um objeto;
    // escrever informações

    $filename = "dados.txt";
    // file_put_contents($filename, "O que você quiser escrever\n", FILE_APPEND);
    // echo "Salvei texto no arquivo!";

    // file_get: parâmetro básico: o arquivo
    // ler informações
    // retorna o conteúdo do arquivo como uma string
    
    $conteudo = file_get_contents($filename);
    
    echo "<pre>";
    echo $conteudo;
    echo "</pre>";

?>