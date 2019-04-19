<?php

namespace App;

use Illuminate\Http\Request;

Interface DictionaryInterface {
    
    public static function listAll();
    
    public static function show($id);
    
    public static function add($data);
    
    public static function change($data, $id);
    
    public static function remove($id);
    
}