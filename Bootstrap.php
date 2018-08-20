<?php

define("URL_BASE", base_url());
define("ASSETS", base_url() . "public/assets/");
define("DIRETORIO_BASE", $_SERVER['DOCUMENT_ROOT']);
function base_url($args = null)
{
    $base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . $args;
    return $base_url;
}
