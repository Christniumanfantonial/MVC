<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About
{


    public static function all()
{
        
            $products_version2 = [
                [
                'head'=>'Service',
                'body'=>'A trust worthy products.'
            ],
            ];
            return ($products_version2);
        
        
    }
}


