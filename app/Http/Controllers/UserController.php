<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Web_setting;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('theme.index');
    }
    public function about()
    {
        return view('theme.about');
    }
    public function products()
    {
        return view('theme.products');
    }
    public function singleproduct()
    {
        return view('theme.single-product');
    }
    public function contact()
    {
        return view('theme.contact');
    }

    public function test()
    {
        $user = Web_setting::where('distributor_id', '358')->get();
        dd($user);
    }
    
}
