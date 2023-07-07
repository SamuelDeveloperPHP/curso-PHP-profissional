<?php

namespace app\controllers;

class Home
{
    public function index($params)
    {
        $users = all('usuarios');
        var_dump($users);die;
        return [
            'view' => 'home.php',
            'data' => ['name' => 'Samuel'],
            'title' => ['title' => 'Home']
        ];
    }
}
