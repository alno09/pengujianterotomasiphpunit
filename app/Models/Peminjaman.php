<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = 'id_pinjam';
    protected $fillable = ['id_user','nama_ruang','tgl_pinjam','jam_peminjaman','keresmian','tingkat', 'nama_peminjam', 'deskripsi_pinjam'];
}
