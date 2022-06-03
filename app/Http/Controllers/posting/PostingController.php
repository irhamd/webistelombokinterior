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
 
    public function cariProduk(Request $req)
    {
        $data = Posting::where('aktif', true)->paginate(12);
        return view('pages/produk/cariproduk', compact("data"));
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
