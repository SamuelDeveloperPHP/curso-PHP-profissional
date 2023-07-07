<?php


require 'bootstrap.php';

try {

    $data = router();
    // verifica se os dados existe
    if (!isset($data['data'])) throw new Exception('Falta o indice da view');

    //verifica se a view exist
    if (!isset($data['view'])) throw new Exception('Falta o indice da view');

    //verifica se o arquivo da view exist
    if (!file_exists(VIEWS . $data['view'])) throw new Exception('Aquivo inesistente!!');

    //extrai os dadps
    extract($data['data']);
    extract($data['title']);

    // o nome da view na uri
    $view = $data['view'];

    //adiciona a index das view e o HTML principal
    require VIEWS . 'index.php';

} catch (Exception $e) {

    //var_dump($e->getMessage());
}
