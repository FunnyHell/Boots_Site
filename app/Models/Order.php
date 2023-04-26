<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public static function GetAll()
    {
        return DB::table('orders')->get();
    }

    public static function Add(\Illuminate\Http\Request $request)
    {
        $price = DB::table('prices')->where('id', '=', $request->price_id)->value('price');
        DB::table('orders')
            ->insert(['name' => $request->name,
            'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'message' => $request->message,
                'price' => $price,
                'status' => 'sended']);
    }

    public static function Edit(\Illuminate\Http\Request $request, $id)
    {
        DB::table('orders')->where('id', '=', $id)->update($request->all());
    }

    public static function DeleteOrder(\Illuminate\Http\Request $request, $id)
    {
        DB::table('orders')->where('id', '=', $request->id)->delete();
    }
}
