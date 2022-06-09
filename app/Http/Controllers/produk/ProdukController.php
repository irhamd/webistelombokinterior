<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\admin\Desain;
use App\Models\admin\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    public function detailProduk(Request $req)
    {
        // try {
            // $alwaysshow = Posting::where('aktif', true)
            //     ->where('always', true)
            //     ->orderBy("created_at", "desc")
            //     ->take(3)
            //     ->get();
            $profil = DB::table('company_m')->where('aktif', true)->first();

            if ($req->has('post_desain')) {
                $id_desain = $req['post_desain'];
                $single = Desain::find($id_desain);
                
                $newV = Desain::where('id', $id_desain)->increment('view', 1);
                // $single->view = $single->view +1 ; 
                // $inc =  $single->Increment('view', 1);
                if (!$single) {
                    return redirect("/");
                }
                return view('pages/single/detailproduk' ,compact("single", "profil"));
            } else {
                return redirect()->back();
            }
        // } catch (\Throwable $th) {
        //     return redirect("/");
        // }
    }

  
}

