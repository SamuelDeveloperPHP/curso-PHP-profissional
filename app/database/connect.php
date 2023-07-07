<?php

function connect(){

    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $banco = 'professional';
    
    try {
        return new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
    } catch (Exception $e) {
        echo 'Erro ao Conectar com o banco de dados!';
      
    }
}