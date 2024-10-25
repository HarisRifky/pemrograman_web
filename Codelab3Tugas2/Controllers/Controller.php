<?php

namespace Controller;

class Controller
{
    // Variable Attributes
    public $controllerName;
    public $controllerMethod;

    // Constructor (Optional, untuk inisialisasi nilai)
    public function __construct($name = '', $method = '')
    {
        $this->controllerName = $name;
        $this->controllerMethod = $method;
    }

    // Method untuk mengambil semua atribut
    public function getControllerAttribute()
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod,
        ];
    }
}
