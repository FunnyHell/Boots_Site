<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function GetAll()
    {
        return DB::table('orders')->get();
    }
    public static function Add(\Illuminate\Http\Request $request)
    {
        DB::table('orders')->insert($request->all());
    }

    public static function Edit(\Illuminate\Http\Request $request)
    {
        DB::table('orders')->where('id', '=', $request->id)->update($request->all());
    }

    public static function DeleteOrder(\Illuminate\Http\Request $request, $id)
    {
        DB::table('orders')->where('id', '=', $request->id)->delete();
    }
}
