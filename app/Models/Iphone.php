<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iphone
{


    public static function all()
    {
        
            $products_version4 = [
                [
                'head'=>'Explore more',
                'body'=>'About iphone products'
            ],
            ];
            return $products_version4;
        
        
    }
}
