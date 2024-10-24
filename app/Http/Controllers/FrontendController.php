<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $list_headline = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('is_headline', 'yes')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(4);
        
        $list_berita_pilihan = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('is_berita_pilihan', 'yes')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(4);

        $list_berita_terbaru = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(20);
       

        // return $list_berita_pilihan;


        
        return view('frontend.homepage', [
        'list_headline' => $list_headline, 
        'list_berita_pilihan' => $list_berita_pilihan,
        'list_berita_terbaru' => $list_berita_terbaru
        ],);
    }

    public function detail_berita($id_berita){
        // $detail_berita = BeritaModel::where('id', $id_berita)->first();

        $detail_berita = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('berita.id', $id_berita)
        ->select('berita.*', 'kategori.nama_kategori')
        ->first();

        
        $list_berita_pilihan = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('is_berita_pilihan', 'yes')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(4);

        return view('frontend.detail-berita', [
            'detail_berita' => $detail_berita,
            'list_berita_pilihan'=> $list_berita_pilihan,
        ]);
    }

    public function kategori($id_kategori){

        // $list_headline = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        // ->where('is_headline', 'yes')
        // ->select('berita.*', 'kategori.nama_kategori')
        // ->get()->take(4);
        
        $list_berita_pilihan = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('is_berita_pilihan', 'yes')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(4);

        $list_berita_terbaru = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->where('berita.kategori_berita', $id_kategori)
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(20);
       

        // return $list_berita_pilihan;


        
        return view('frontend.kategori', [
        // 'list_headline' => $list_headline, 
        'list_berita_pilihan' => $list_berita_pilihan,
        'list_berita_terbaru' => $list_berita_terbaru
        ],);


    }

    public function indeks(){

        $list_berita_terbaru = BeritaModel::join('kategori', 'berita.kategori_berita', '=', 'kategori.id')
        ->select('berita.*', 'kategori.nama_kategori')
        ->get()->take(20);
        
        return view('frontend.indeks', [
        'list_berita_terbaru' => $list_berita_terbaru,
        ]);
    }
    
}
