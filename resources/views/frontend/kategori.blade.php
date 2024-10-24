@extends('frontend.layout')

@section('konten')

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