<?php

namespace App\Http\Controllers\posting;

use App\Http\Controllers\Controller;
use App\Models\admin\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostingController extends Controller
{
    public function riwayatPosting(Request $req)
    {
        $data = Posting::where('aktif', true)->paginate(12);
        return view('post/riwayat_berita', compact("data"));
    }

    public function profil(Request $req)
    {
        return view('pages/profil');
    }

    public function tarif(Request $req)
    {
        return view('pages/tarif');
    }

    public function farmasi(Request $req)
    {
        return view('pages/penunjang/farmasi');
    }

    public function gizi(Request $req)
    {
        return view('pages/penunjang/gizi');
    }

    public function lab(Request $req)
    {
        return view('pages/penunjang/lab');
    }
    public function perawatan(Request $req)
    {
        return view('pages/penunjang/perawatan');
    }

    public function pscmems(Request $req)
    {
        return view('pages/psc/pscmems');
    }

    public function NICU(Request $req)
    {
        return view('pages/Layanan/NICU');
    }


    public function rawatinap(Request $req)
    {
        return view('pages/Layanan/rawatinap');
    }

    public function rawatjalan(Request $req)
    {
        return view('pages/Layanan/rawatjalan');
    }

    public function ICU(Request $req)
    {
        return view('pages/Layanan/ICU');
    }

    public function IGD(Request $req)
    {
        return view('pages/Layanan/IGD');
    }
    
    public function PICU(Request $req)
    {
        return view('pages/Layanan/PICU');
    }


    public function nifas(Request $req)
    {
        return view('pages/Layanan/nifas');
    }

    public function ruangoprasi(Request $req)
    {
        return view('pages/Layanan/ruangoprasi');
    }
    
    

    public function sarana(Request $req)
    {
        return view('pages/penunjang/sarana');
    }

    public function simrs(Request $req)
    {
        return view('pages/penunjang/simrs');
    }

    public function rm(Request $req)
    {
        return view('pages/penunjang/rm');
    }

    public function cssd(Request $req)
    {
        return view('pages/penunjang/cssd');
    }

    public function kamarjenazah(Request $req)
    {
        return view('pages/penunjang/kamarjenazah');
    }


    public function radio(Request $req)
    {
        return view('pages/penunjang/radio');
    }

    public function videofoto(Request $req)
    {
        return view('pages/videofoto');
    }

    public function infokamar(Request $req)
    {
        return view('pages/infokamar');
    }

    public function pelayananrs(Request $req)
    {
        return view('pages/pelayananrs');
    }


    public function dokter(Request $req)
    {
        return view('pages/dokter');
    }

    public function ereservasi(Request $req)
    {
        return view('pages/ereservasi');
    }

    public function visimisi(Request $req)
    {
        return view('pages/visimisi');
    }

    public function sdm(Request $req)
    {
        return view('pages/sdm');
    }

    public function dataPosting(Request $req)
    {
        $data = Posting::where('aktif', true)->orderby('created_at', 'desc')->get();
        return view('admin/data-posting', compact("data"));
    }

    public function single(Request $req)
    {
        try {
            $alwaysshow = Posting::where('aktif', true)
                ->where('always', true)
                ->orderBy("created_at", "desc")
                ->take(3)
                ->get();

            if ($req->has('post')) {
                $id_hosting = $req->query('post');
                $single = Posting::find($id_hosting);
                if (!$single) {
                    return redirect("/");
                }
                return view('post/single', compact("single", "alwaysshow"));
            } else {
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            return redirect("/");
        }
    }

    public function createPosting(Request $req)
    {
        try {

            // dd($req);
            $id_posting =  $req->query('id_posting');
            if ($id_posting) {
                $post = Posting::find($id_posting);
            } else {
                $post = new Posting();
            }
            $post->short_title = $req->short_title;
            $post->aktif = true;
            $post->long_title = $req->long_title;
            $post->tanggal = $req->tgl;
            $post->body = $req->body_posting;
            $post->deskripsi = $req->deskripsi;

            if ($req->image) {
                $fileName = Str::random(20) . time() . '.' . $req->image->extension();
                $post->image = $fileName;
                $req->image->move(public_path('post/upload'), $fileName);
            }
            $post->save();

            // $req->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // ]);

            $status = 'Suksess .!';
        } catch (\Throwable $th) {
            $status = $th->getMessage();
        }
        // Alert::success('okee');
        // Alert::success(' TITLE NYA APA ', ' PESAN BERHASIL / ERRORNYA APA');
        return back()->with('status', $status);
    }
}

// create_posting.blade
