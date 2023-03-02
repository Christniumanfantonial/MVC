<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index
{


    public static function all()
    {
        
            $products_version1 = [
                [
                'head'=>'Welcome To Mr.Gagets',
                'body'=>'Its Nice To Meet You'
                ],
            ];
            return ($products_version1);
        
        
    }
}

