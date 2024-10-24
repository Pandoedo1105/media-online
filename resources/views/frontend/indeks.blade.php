@extends('frontend.layout')

@section('konten')


<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="block">
                    <h3 class="news-title">
                        <span>Indeks</span>
                    </h3>


                    <div class="post-list-block">
                        @foreach($list_berita_terbaru as $berita_terbaru)
                            <div class="post-block-wrapper post-float clearfix">
                                <div class="post-thumbnail col-5">
                                    <img class="img-fluid" src="/images/{{$berita_terbaru->gambar}}" alt="post-thumbnail"/>
                                    
                                </div>

                                <div class="post-content col-7">
                                    <h2 class="post-title title-sm">
                                        <a href="/post/{{$berita_terbaru->id}}">{{$berita_terbaru->judul_berita}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="posted-time">{{$berita_terbaru->created_at}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

				
			</div>

</div>

</section>

@endsection