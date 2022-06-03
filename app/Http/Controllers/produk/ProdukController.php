<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\admin\Desain;
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

            if ($req->has('post_desain')) {
                $id_desain = $req->query('post_desain');
                $single = Desain::find($id_desain);
                if (!$single) {
                    return redirect("/");
                }
                return view('pages/single/detailproduk' ,compact("single"));
            } else {
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            return redirect("/");
        }
    }

  
}

