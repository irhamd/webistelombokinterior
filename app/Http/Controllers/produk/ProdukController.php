<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\admin\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    public function detailProduk(Request $req)
    {
        try {
            // $alwaysshow = Posting::where('aktif', true)
            //     ->where('always', true)
            //     ->orderBy("created_at", "desc")
            //     ->take(3)
            //     ->get();

            // if ($req->has('post')) {
            //     $id_hosting = $req->query('post');
            //     $single = Posting::find($id_hosting);
            //     if (!$single) {
            //         return redirect("/");
            //     }
            //     return view('post/single', compact("single", "alwaysshow"));
            // } else {
            //     return redirect()->back();
            // }
            return view('pages/single/detailproduk');
        } catch (\Throwable $th) {
            return redirect("/");
        }
    }

  
}

