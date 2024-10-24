@extends('admin.layout')
@section('konten')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambah Berita</h4>
                <p class="card-description">
                  Form Tambah Kategori
                </p>
                <form class="forms-sample" method="post" action="/admin/berita/simpan" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Nama Kategori">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Konten</label>
                    <textarea class="form-control" name="konten" rows="3"></textarea>
                  </div>
                    
                 

                  <div class="form-group">
                    <label for="exampleInputUsername1">Kategori Berita</label>
            
                    <select class="form-control" name="kategori" >
                      @foreach ($list_kategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="Nama Kategori">
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
    </div>
  </div>


@endsection