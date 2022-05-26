<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        $lastpost = Posting::where('aktif', true)
            ->orderBy("created_at", "desc")
            ->take(2)
            ->get();

        $company = DB::table('company_m')
            ->where('aktif', true)
            ->first();
        $alwaysshow = Posting::where('aktif', true)
            ->where('always', true)
            ->orderBy("created_at", "desc")
            ->take(3)
            ->get();

        $karyawan = Karyawan::where('aktif', true)
            ->get();

        return view(
            'index',
            compact("lastpost", "alwaysshow", "company", "karyawan")
        );

        //code...

    }
}

// create_posting.blade
