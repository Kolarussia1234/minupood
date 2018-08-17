<?php

class Flash
{
    private $flash;

    public function __construct()
    {
        $cookie = Context::getContext()->cookie;
        if (!empty($cookie->flash_cookie)) {
            $this->flash = Tools::jsonDecode($cookie->flash_cookie, true);
        } else {
            $this->flash = array();
        }
        unset($cookie->flash_cookie);
    }

    public function store($key, $value)
    {
        $this->flash[$key] = $value;
        Context::getContext()->cookie->flash_cookie = Tools::jsonEncode($this->flash);
    }

    public function get($key)
    {
        if (isset($this->flash[$key])) {
            return $this->flash[$key];
        }
        return false;
    }
}
