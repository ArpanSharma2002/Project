<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Web_setting;
use App\Models\Currency;
use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function showThemeData()
    {
        return view('theme.index');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|digits_between:10,15',
            'password' => 'required|string|min:6',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make('password'),
        ]);
        return response()->json(['success' => 'Contact created successfully.']);
}

}