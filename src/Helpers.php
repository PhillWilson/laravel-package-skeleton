<?php

namespace VendorName\MyPackageName;

class Helpers
{
    private $output;

    public function __construct()
    {
        $this->output = 'Hello ';
    }

    public function name($name)
    {
        $this->output .= $name;
        return $this;
    }

    public function howAreYou()
    {
        $this->output .= 'how are your?';
        return $this;
    }

    public function getOutput()
    {
        return $this->output;
    }
}
