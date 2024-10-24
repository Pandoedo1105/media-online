<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $list_berita = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->select('berita.*', 'kategori.nama_kategori')->get();
        // return $list_berita;
        return view('admin.berita', ['list_berita'=>$list_berita]);
    }

    public function tambah() {
        $list_kategori = KategoriModel::get();
        return view('admin.berita-tambah', ['list_kategori' => $list_kategori]);
    }

    public function simpan(Request $post) {
        // return $post;
        $imageName = 'img-' .time().'.'.$post->gambar->extension();
        $post->gambar->move(public_path('images'), $imageName);
        // return $imageName;

        $data_simpan = new BeritaModel();
        $data_simpan->judul_berita = $post->judul;
        $data_simpan->konten_berita = $post->konten;
        $data_simpan->kategori_berita = $post->kategori;
        $data_simpan->gambar = $imageName;
        $data_simpan->is_headline = 'no';
        $data_simpan->is_berita_pilihan = 'no';
        $data_simpan->created_at = date('Y-m-d');
        $data_simpan->updated_at = date('Y-m-d');
        $data_simpan->save();
        return redirect('/admin/berita');
    }

    public function edit($id_berita){
        $detail_berita = BeritaModel::where('id', $id_berita)->first();
        $list_kategori = KategoriModel::get();
        // return $list_berita;
        return view('admin.berita-edit', ['list_kategori' => $list_kategori,'detail_berita'=>$detail_berita]);
    }

    public function update(Request $post, $id_berita){
        $update_berita = BeritaModel::where('id', $id_berita)->first();
        $update_berita->judul_berita = $post->judul;
        $update_berita->konten_berita = $post->konten;
        $update_berita->kategori_berita = $post->kategori;
        
        // Proses Gambar
        if($post->gambar !=null){
            $imageName = 'img-'.time().'.'.$post->gambar->extension();
            $post->gambar->move(public_path('images'), $imageName);
            $update_berita->gambar = $imageName;
        }
        $update_berita->updated_at = $post->updated_at;
        $update_berita->save();
        return redirect('/admin/berita');
        

    }

    public function hapus($id_berita){
        $hapus = BeritaModel::where('id', $id_berita)->delete();
        return redirect('/admin/berita');
    }

    public function set_headline($status, $id_berita){
        $berita = BeritaModel::where('id', $id_berita)->first();
        if($status == 'yes'){
            $berita->is_headline = 'yes';
        }
        elseif($status == 'no'){
            $berita->is_headline = 'no';
        }
        $berita->save();

        return redirect('/admin/berita');
        }
        
    public function set_berita_pilihan($status, $id_berita){
        $berita = BeritaModel::where('id', $id_berita)->first();
        if($status == 'yes'){
            $berita->is_berita_pilihan = 'yes';
        }
        elseif($status == 'no'){
            $berita->is_berita_pilihan = 'no';
        }
        $berita->save();

        return redirect('/admin/berita');
        }
}