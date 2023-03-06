<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\About;
use App\Models\Products;
use App\Models\Iphone;
use App\Models\Contact;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){
        return view('products.index',['version1' => Index::all()]);
    }
    public function services(){
        return view('products.services',['version2' => About::all()]);
    }
    public function portfolio(){
        return view('products.portfolio',['version3' => Products::all()]);
    }
    public function about(){
        return view('products.about',['version4' => Iphone::all()]);
    }
    public function contact(){
        return view('products.contact',['version5' => Contact::all()]);
    }

}
