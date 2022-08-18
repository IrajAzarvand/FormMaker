<?php

namespace App\Http\Controllers;

use App\Models\TagType;
use Illuminate\Http\Request;

class FormCreatorController extends Controller
{
    public function index()
    {
        $tagList = TagType::with('elements')->get();
        return view('welcome');
        // dd($tagList);
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