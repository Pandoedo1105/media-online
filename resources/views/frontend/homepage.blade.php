@extends('frontend.layout')

@section('konten')

<section class="featured-posts">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-md-3 mr-lg-3">
                    <div class="item" style="background-image:url(images/{{$list_headline[0]['gambar']}})">
                        <div class="post-content">
                            <a href="/kategori/{{$list_headline[0]['kategori_berita']}}" class="post-cat bg-primary">{{$list_headline[0]['nama_kategori']}}</a>
                            <h2 class="slider-post-title">
                                <a href="/post/{{$list_headline[0]['id']}}">{{ $list_headline[0]['judul_berita']}}</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline[0]['created_at']}}</span>
                                <span class="post-author">
                                    by
                                    <a href="author.html">Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 col-lg-4">
                 <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url(images/{{$list_headline[1]['gambar']}})">
                        <div class="post-content">
                            <a href="/kategori/{{$list_headline[1]['kategori_berita']}}" class="post-cat bg-danger">{{$list_headline[1]['nama_kategori']}}</a>
                            <h2 class="slider-post-title">
                                <a href="/post/{{$list_headline[1]['id']}}">{{ $list_headline[1]['judul_berita']}}</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline[1]['created_at']}}</span>
                                <span class="post-author">
                                    <span> by </span>
                                    <a href="author.html">Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-4">
                <div class="row mt-3 mt-lg-0">
                    <div class="col-lg-12 col-xs-12 col-sm-6 col-md-6">
                        <div class="post-featured-style" style="background-image:url(images/{{$list_headline[2]['gambar']}})">
                            <div class="post-content">
                                <a href="/kategori/{{$list_headline[2]['kategori_berita']}}" class="post-cat bg-success">{{$list_headline[2]['nama_kategori']}}</a>
                                <h2 class="post-title">
                                    <a href="/post/{{$list_headline[2]['id']}}">{{ $list_headline[2]['judul_berita']}}></a>
                                </h2>
                                <div class="post-meta mt-2">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline[2]['created_at']}}
                                        <span> by </span>
                                        <a href="author.html">Admin</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 col-sm-6 col-md-6">
                        <div class="post-featured-style" style="background-image:url(images/{{$list_headline[3]['gambar']}})">
                            <div class="post-content">
                                <a href="/kategori/{{$list_headline[3]['kategori_berita']}}" class="post-cat bg-success">{{$list_headline[3]['nama_kategori']}}</a>
                                <h2 class="post-title">
                                    <a href="/post/{{$list_headline[3]['id']}}">{{ $list_headline[3]['judul_berita']}}</a>
                                </h2>
                                <div class="post-meta mt-2">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline[3]['created_at']}}</span>
                                    <span class="post-author">
                                        <span> by </span>
                                        <a href="author.html">Admin</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="block">
                    <h3 class="news-title">
                        <span>Latest News</span>
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
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="widget">
    <h3 class="news-title">
        <span>Stay in touch</span>
    </h3>

    <ul class="list-inline social-widget">
        <li class="list-inline-item">
              <a class="social-page youtube" href="#">
                <i class="fa fa-play"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="social-page facebook" href="#">
               <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="social-page twitter" href="#">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="social-page pinterest" href="#">
                <i class="fa fa-pinterest"></i>
            </a>
        </li>
         <li class="list-inline-item">
            <a class="social-page linkedin" href="#">
                <i class="fa fa-linkedin"></i>
            </a>
        </li>
       
        <li class="list-inline-item">
            <a class="social-page youtube" href="#">
                <i class="fa fa-youtube"></i>
            </a>
        </li>

    </ul>

</div>
					<div class="widget">
    <h3 class="news-title">
        <span>Berita Pilihan</span>
    </h3>


    <div class="post-list-block">
        @foreach($list_berita_pilihan as $berita_pilihan)
            <div class="post-block-wrapper post-float ">
                <div class="post-thumbnail">
                    <a href="single-post.html">
                        <img class="img-fluid" src="/images/{{$berita_pilihan->gambar}}" alt="post-thumbnail"/>
                    </a>
                </div>
                <div class="post-content">
                    <h2 class="post-title title-sm">
                        <a href="">{{$berita_pilihan->judul_berita}}</a>
                    </h2>
                    <div class="post-meta">
                        <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>{{$berita_pilihan->created_at}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

	</div>
</section>

@endsection