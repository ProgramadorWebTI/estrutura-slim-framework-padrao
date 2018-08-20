<?php

namespace Galeguinho;

use Rain\Tpl;

class Page
{
    private $tpl, $options = [], $defaults = ["data" => []];

    public function __construct($opts = array())
    {
        $this->options = array_merge($this->defaults, $opts);
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR)) {
            $path_tpl = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "projetoSlimPadrao" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR;
            $path_cach = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "projetoSlimPadrao" . DIRECTORY_SEPARATOR . "views-cache" . DIRECTORY_SEPARATOR;
        } else {
            $path_tpl = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR;
            $path_cach = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views-cache" . DIRECTORY_SEPARATOR;
        }
        $config = array(
            "tpl_dir" => $path_tpl,
            "cache_dir" => $path_cach,
            "debug" => true,
            "php_enabled" => true,
            "tpl_ext" => "php",
        );
        Tpl::configure($config);
        $this->tpl = new Tpl();
        $this->setData($this->options["data"]);
        $this->tpl->draw("header");
    }

    private function setData($data = array())
    {
        foreach ($data as $key => $value):
            $this->tpl->assign($key, $value);
        endforeach;
    }

    public function setTpl($name, $data = array(), $returnHTML = false)
    {
        $this->setData($data);
        return $this->tpl->draw($name, $returnHTML);
    }

    public function __destruct()
    {
        $this->tpl->draw("footer");
    }

}
