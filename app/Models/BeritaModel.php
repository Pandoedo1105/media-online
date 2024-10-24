<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = ['judul_berita', 'konten_berita', 'kategori_berita', 'gambar', 'is_headline', 'is_berita_pilihan',
'created_at','updated_at'];
}
