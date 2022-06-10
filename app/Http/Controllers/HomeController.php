<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin\Desain;
use App\Models\admin\Posting;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home(Request $req)
    {

        $desain = Desain::where('aktif', true)->orderby('view', 'desc')->paginate(12);
        $profil = DB::table('company_m')->where('aktif', true)->first();



        // $company = DB::table('company_m')
        //     ->where('aktif', true)
        //     ->first();
        // $alwaysshow = Posting::where('aktif', true)
        //     ->where('always', true)
        //     ->orderBy("created_at", "desc")
        //     ->take(3)
        //     ->get();

        // $karyawan = Karyawan::where('aktif', true)
        //     ->get();

        return view('index', compact("desain","profil"));

        //code...

    }
}

// create_posting.blade
