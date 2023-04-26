<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('home', ['orders' => Order::GetAll()]);
    }

    public function store(Request $request)
    {
        Order::Add($request);
        return redirect('/');
    }

    public function edit(Request $request, $id)
    {
        Order::Edit($request, $id);
        return redirect('/home');
    }

    public function delete(Request $request, $id)
    {
        Order::DeleteOrder($request, $id);
        return redirect('/home');
    }

    public function editing($id)
    {
//        dd(Order::GetOne($id));
        return view('editting', ['order' => Order::GetOne($id), 'id' => $id]);
    }
}
