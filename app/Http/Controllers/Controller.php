<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function __construct()
    {
        // Initialize any common properties or methods for all controllers here
    }
    public function __destruct()
    {
        // Clean up resources or perform any final actions before the object is destroyed
    }
}
