<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $list_kategori = KategoriModel::get();
        // return $list_kategori;
        return view('admin.kategori', ['list_kategori'=>$list_kategori]);
    }

    public function tambah() {
        return view('admin.kategori-tambah');
    }

    public function simpan(Request $post) {
        // return $post;
        $data_simpan = new KategoriModel();
        $data_simpan->nama_kategori = $post->nama_kategori;
        $data_simpan->created_at = date('Y-m-d');
        $data_simpan->updated_at = date('Y-m-d');
        $data_simpan->save();
        return redirect('/admin/kategori');
    }

    public function edit($id_kategori){
        $detail_kategori = KategoriModel::where('id', $id_kategori)->first();
        // return $list_kategori;
        return view('admin.kategori-edit', ['detail_kategori'=>$detail_kategori]);
    }

    public function update(Request $post, $id_kategori){
        $update_kategori = KategoriModel::where('id', $id_kategori)->first();
        $update_kategori->nama_kategori = $post->nama_kategori;
        $update_kategori->updated_at = $post->updated_at;
        $update_kategori->save();
        return redirect('/admin/kategori');
        

    }

    public function hapus($id_kategori){
        $hapus = KategoriModel::where('id', $id_kategori)->delete();
        return redirect('/admin/kategori');
    }
}
