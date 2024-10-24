@extends('admin.layout')
@section('konten')

<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Berita</h4>
            <p class="card-description">
              Manajemen Berita
            </p>
            <div>
              <a href="/admin/berita/tambah">
                <button type="button" class="btn btn-primary btn-rounded btn-fw btn-sm">Tambah Berita +</button>
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
                      Judul
                    </th>
                    <th>
                      Kategori Berita
                    </th>
                    <th>
                      Is Headline
                    </th>
                    <th>
                      Is Berita Pilihan
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
                  @foreach($list_berita as $berita)
                  <tr>
                    <td class="py-1">
                      {{ $berita->id}}
                     </td>

                    <td class="py-1">
                     {{ $berita->judul_berita}}
                    </td>

                    <td>
                      {{ $berita->nama_kategori}}
                    </td>
                    <td>
                                           
                      @if ($berita->is_headline == 'no')
                      <a href="/admin/berita/set-headline/yes/{{$berita->id}}">
                        <button type="button" class="btn btn-secondary btn-sm">Set Headline</button>
                      </a>
                      @else
                      <a href="/admin/berita/set-headline/no/{{$berita->id}}">
                        <button type="button" class="btn btn-success btn-sm">Unset Headline</button>
                      </a>
                      @endif
                    </td>
                    <td>
                                                                 
                      @if ($berita->is_berita_pilihan == 'no')
                      <a href="/admin/berita/set-berita-pilihan/yes/{{$berita->id}}">
                        <button type="button" class="btn btn-secondary btn-sm">Set Berita Pilihan</button>
                      </a>
                      @else
                      <a href="/admin/berita/set-berita-pilihan/no/{{$berita->id}}">
                        <button type="button" class="btn btn-success btn-sm">Unset Berita Pilihan</button>
                      </a>
                      @endif

                    </td>
                    <td>
                      {{ $berita->created_at}}
                    </td>
                    <td>
                      <a href="/admin/berita/edit/{{$berita->id}}">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                      </a>
                      <a href="/admin/berita/hapus/{{$berita->id}}">
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