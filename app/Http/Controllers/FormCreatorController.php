<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCreatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function stuff()
    {
        dd(TagList(), ElementsList());
    }

    public function FormStuffs(Request $request)
    {
        dd($request);
    }
}