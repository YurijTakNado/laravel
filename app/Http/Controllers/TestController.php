<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {

    // Тестовый
    public function test() {
        $objects = \App\Condition::listAll();
        dd($objects);
    }
}