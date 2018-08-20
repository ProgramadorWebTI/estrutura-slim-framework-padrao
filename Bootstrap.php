<?php

define("URL_BASE", "http://192.168.1.100/projetoSlimPadrao/");
define("ASSETS", "http://192.168.1.100/projetoSlimPadrao/public/assets/");
define("DIRETORIO_BASE", $_SERVER['DOCUMENT_ROOT']);
function base_url($args = null)
{
    $base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . $args;
    return $base_url;
}
