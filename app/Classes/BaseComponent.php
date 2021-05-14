<?php

namespace App\Classes;

class BaseComponent {
    public $props = [];

    public function __construct($props) {
        $this->props = $props;
    }

    public function setAttr($attr, $val) {
        $this->props[$attr] = $val;
        return $this;
    }

    public function getAttr($attr) {
        return $this->props[$attr];
    }

    public function getAttributes() {
        $asd = '';

        foreach ($this->props as $name => $prop) {
            $asd .= $name . '="' . $prop . '" ';
        }

        return rtrim($asd);
        // return str_replace('&', ' ', urldecode(http_build_query($this->props)));
    }
}
