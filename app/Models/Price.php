<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Price extends Model
{
    use HasFactory;

    public static function GetAll()
    {
        return DB::table('prices')->get();
    }

    public static function Add(\Illuminate\Http\Request $request)
    {
        DB::table('prices')->insert($request->all());
    }
}
