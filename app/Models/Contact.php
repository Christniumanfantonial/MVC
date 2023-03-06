<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact
{


    public static function all()
    {
        
            $products_version5 = [
                [
                'head'=>'Contact Us',
                'body'=>'Reach Us'
            ],
            ];
            return $products_version5;
        
        
    }
}
