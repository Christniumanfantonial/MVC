<?php
namespace App\Http\Contrllers;
use App\Models\ModelName;

class PagesController extends Controller{
    public function index()
    {
        $ModelName = new ModelName();
        return view ('index')-> with('content',@ModelName-> index());
    }
    
}
