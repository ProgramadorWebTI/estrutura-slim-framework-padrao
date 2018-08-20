<?php

use Galeguinho\Page;
use Galeguinho\PageAdmin;

$app->get("/", function () {
    $view = new Page();
    $users = new \Galeguinho\Models\Salve();
    $usuarios = array(
        ["nome" => "Heuder Rodrigues"],
        ["nome" => "Diego Henrique"],
        ["nome" => "Tiago Filipe"],
        ["nome" => "Vanielen Rodrigues"]
    );
    $view->setTpl('home', array(
        "usuarios" => $usuarios
    ));

});

$app->get("/admin", function () {
    $view = new PageAdmin();
    $view->setTpl("login");
});
