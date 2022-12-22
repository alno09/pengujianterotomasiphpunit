<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function userShow () {
        $pinjam =Peminjaman::where('id_user', Auth::user()->id)->get();
        return view ('peminjaman', ['pinjam' => $pinjam]);
    }

    public function userMohon () {
        return view ('user_mohon');
    }

    public function userSimpan(Request $Request) {
        Peminjaman::create([
            'id_user' => Auth::user()->id,
            'nama_ruang' => $Request->nama_ruang,
            'tgl_pinjam' => $Request->tgl_pinjam,
            'jam_peminjaman' => $Request->jam_peminjaman,
            'keresmian' => $Request->keresmian,
            'tingkat' => $Request->tingkat,
            'nama_peminjam' => Auth::user()->name,
            'deskripsi_pinjam' => $Request->deskripsi_pinjam,
        ]);
        return redirect ('peminjaman');
    }

    public function userBatalkan($id_pinjam) {
        $pinjam = Peminjaman::find($id_pinjam)->delete();
        return redirect ('peminjaman');
    }

    public function userSurat($id_pinjam) {
        return view ('peminjaman_surat_pdf');
    }

    public function adminShow () {
        $pinjam = Peminjaman::all();
        return view ('peminjaman-admin', ['pinjam' => $pinjam]);
    }

    public function adminApprove ($id_pinjam, Request $Request) {
        $pinjam = Peminjaman::find( $id_pinjam);
        $pinjam->status = $Request->status;
        $pinjam->save();
        if ($pinjam->status == "Ditolak") {
            $pinjam->delete();
        } elseif ($pinjam->status == "Disetujui") {
            $pinjam->save();
        }
        return redirect ('/peminjaman/admin');
    }

    public function adminDetil($id_pinjam) {
        $pinjam =Peminjaman::find($id_pinjam);
        return view ('surat_peminjaman_pdf', ['nama_ruang' => $pinjam->nama_ruang]);
    }
}
