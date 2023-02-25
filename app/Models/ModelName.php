<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeName extends Mode1
{
    use HasFactory;

    public static function index()
    {
        
            $content = [
                'head'=>'Welcome to Mr.Gadgets',
                'body'=>'It is a place where you can find new and used genuine Iphone at best price.'
            ];
            return $content;
        
        
    }
}
