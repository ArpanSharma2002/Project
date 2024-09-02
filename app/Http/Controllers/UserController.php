<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Banner;

class UserController extends Controller
{
    public function showpage($page)
    {
        $view = match ($page) {
            'index' => 'theme.index',
            'about' => 'theme.about',
            'products' => 'theme.products',
            'single-product' => 'theme.single-product',
            'contact' => 'theme.contact',
            default => abort(404),  
        };

        return view($view);
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
            'mobile' => 'required|digits_between:08,10',
            'password' => 'required|string|min:6',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json(['success' => 'Contact created successfully.']);
    }

    public function show()
    {
        $content = Content::where('is_homepage', true)->first();
        $banners = Banner::where('active', true)->get();

        return view('theme.index', [
            'content' => $content,
            'banners' => $banners
        ]);
    }
}
