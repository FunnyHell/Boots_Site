<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        return view('price-list', ['prices' => Price::GetAll()]);
    }

    public function store(Request $request)
    {
        Price::Add($request);
        return redirect('/price-list');
    }

    public function getall()
    {
        return view('welcome', ['prices' => Price::GetAll()]);
    }
}
