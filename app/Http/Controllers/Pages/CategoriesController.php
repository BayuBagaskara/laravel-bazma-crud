<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view("pages.categories.index");
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {
    }
    public function show(Request $request, string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy($id)
    {
    }
}
