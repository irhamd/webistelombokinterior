<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Desain;
use App\Models\admin\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function buat_berita(Request $req)
    {
        $edit = null;
        $query = $req->query('id_post');
        if (isset($query)) {
            $edit = Posting::find($req->query('id_post'));
        }
        $kategori = DB::table('kategoriproduk_m')->where('aktif', true)->get();

        return view('admin/create_posting/create_posting', compact("edit", "kategori"));
    }
}

 