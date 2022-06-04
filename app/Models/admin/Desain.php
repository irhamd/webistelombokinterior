<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Desain extends Model
{
    use HasFactory;
    protected $table = "designproduk_m";
    protected $guarded = [''];


    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = Auth::user()->id;
            $model->updated_by = Auth::user()->id;
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::user()->id;
        });
    }
}
