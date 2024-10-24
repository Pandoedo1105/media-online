@extends('admin.layout')
@section('konten')

<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Kategori Berita</h4>
            <p class="card-description">
              Manajemen Kategori Berita
            </p>
            <div>
              <a href="/admin/kategori/tambah">
                <button type="button" class="btn btn-primary btn-rounded btn-fw btn-sm">Tambah Kategori +</button>
              </a>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      ID
                    </th>
                    <th>
                      Nama Kategori
                    </th>
                    <th>
                      Created At
                    </th>
                    <th>
                      Action
                    </th>
 
                  </tr>
                </thead>
                <tbody>
                  @foreach($list_kategori as $kategori)
                  <tr>
                    <td class="py-1">
                      {{ $kategori->id}}
                     </td>

                    <td class="py-1">
                     {{ $kategori->nama_kategori}}
                    </td>
                    <td>
                      {{ $kategori->created_at}}
                    </td>
                    <td>
                      <a href="/admin/kategori/edit/{{$kategori->id}}">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                      </a>
                      <a href="/admin/kategori/hapus/{{$kategori->id}}">
                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                      </a>
                    </td>
                    <td>
                     
                    </td>
                    <td>
                      
                    </td>
                  </tr>
                  @endforeach
                 </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection