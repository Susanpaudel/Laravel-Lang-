<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    public function index(Request $request){
        if (array_key_exists($request->lang, config('app.supported_locales'))) {
            session(['locale' => $request->lang]);
        }
        return back();
    }
}
