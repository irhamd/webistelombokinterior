<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Desain;
use App\Models\admin\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class DesainController extends Controller
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
    public function listDesain(Request $req)
    {
        $cari = null;
        $query = $req->query('cari');
        if (isset($query)) {
            // $cari = Posting::find($req->query('id_post'));
        }

        // $data = Desain::where('aktif', true)->paginate(1);
        $data = Desain::where('aktif', true)->get();
        // return $data;
        return view('admin/desain_produk/listproduk', compact("data"));
    }
    public function BuatDesain(Request $req)
    {
        $edit = null;
        $query = $req->query('id_post');
        $profil = DB::table('company_m')->where('aktif', true)->first();

        if (isset($query)) {
            $edit = Desain::find($req->query('id_post'));
        }
        $kategori = DB::table('kategoriproduk_m')->where('aktif', true)->get();
        // dd($edit);

        return view('admin/desain_produk/BuatDesain', compact("edit","profil","kategori"));
    }

    public function postDesainBaru(Request $req)
    {
        // try {

            // dd($req);
            $id_desain =  $req->query('id_post');
            if ($id_desain) {
                $post = Desain::find($id_desain);
            } else {
                $post = new Desain();
                $post->aktif = true;
                $post->view = 1;
                $post->beli = 0;
            }
            $post->namaproduk = $req->namaproduk;
            $post->deskripsi = $req->deskripsi;
            $post->id_kategori = $req->kategori;
            $post->body_desain = $req->body_desain;

            if ($req->image) {
                $fileName = Str::random(20) . time() . '.' . $req->image->extension();
                $post->gambar = $fileName;
                $req->image->move(public_path('post/upload'), $fileName);
            }
            $post->save();

            // $req->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // ]);

            $status = 'Suksess .!';
        // } catch (\Throwable $th) {
        //     $status = $th->getMessage();
        // }
        // Alert::success('okee');
        // Alert::success(' TITLE NYA APA ', ' PESAN BERHASIL / ERRORNYA APA');
        return back()->with('status', $status);
    }


    public function hapusProduk(Request $req)
    {
        $hapus = Desain::where('id',$req['id'])->update([
            "aktif" => false
        ]);
        return Redirect::back()->with('hapus', $hapus ? 1 : 0);
    }

}

 