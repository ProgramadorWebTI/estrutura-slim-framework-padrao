<?php

namespace Galeguinho;

use Rain\Tpl;

class PageAdmin
{
    private $tpl, $options = [], $defaults = ["data" => []];

    public function __construct($opts = array())
    {
        $this->options = array_merge($this->defaults, $opts);
        $config = array(
            "tpl_dir" => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "admin" . DIRECTORY_SEPARATOR,
            "cache_dir" => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views-cache" . DIRECTORY_SEPARATOR . "admin" . DIRECTORY_SEPARATOR,
            "debug" => false,
            "php_enabled" => true,
            "tpl_ext" => "php"
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