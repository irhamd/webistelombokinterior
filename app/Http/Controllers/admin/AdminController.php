<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Posting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function buat_berita(Request $req)
    {
        $edit = null;
        $query = $req->query('id_post');
        if (isset($query)) {
            $edit = Posting::find($req->query('id_post'));
        }
        return view('admin/create_posting/create_posting', compact("edit"));
    }
}
