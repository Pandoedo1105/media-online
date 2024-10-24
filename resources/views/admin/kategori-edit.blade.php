@extends('admin.layout')
@section('konten')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Kategori</h4>
                <p class="card-description">
                  Form Edit Kategori
                </p>
                <form class="forms-sample" method="post" action="/admin/kategori/update/{{$detail_kategori->id}}">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{$detail_kategori->nama_kategori}}" placeholder="Nama Kategori">
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>

                </form>
              </div>
            </div>
          </div>
    </div>
  </div>


@endsection