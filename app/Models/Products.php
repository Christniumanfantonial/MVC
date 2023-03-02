<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products 
{
   

    public static function all()
    {
        
            $products_version3 = [
                [
                'head'=>'Products',
                'body'=>'High Quality Gadgets'
            ],
            ];
            return $products_version3;
        
        
    }
}
