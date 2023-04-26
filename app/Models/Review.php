<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public static function GetAll()
    {
        return DB::table('reviews')->get();
    }

    public static function Add(\Illuminate\Http\Request $request)
    {
        DB::table('reviews')
            ->insert(['name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'review' => $request->review]);
    }

    public static function DeleteReview(\Illuminate\Http\Request $request, $id)
    {
        DB::table('reviews')->where('id', '=', $request->id)->delete();
    }
}
