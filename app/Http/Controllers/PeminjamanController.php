<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function userShow () {
        $pinjam = Peminjaman::all();
        return view ('peminjaman', ['pinjam' => $pinjam]);
    }

    public function userMohon () {
        return view ('user_mohon');
    }

    public function userSimpan(Request $Request) {
        Peminjaman::create([

        ]);
    }
}
