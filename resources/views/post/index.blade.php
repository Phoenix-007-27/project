@extends('layouts.main')
@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
              @foreach ($posts as $post )
                  
              <div class="col-md-4 fetured-post blog-post" data-aos="fade-up" >
                  <div class="blog-post-thumbnail-wrapper">
                      <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{$post->category->title}}</p>
                    <a href="{{route('show.index', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
              
             <div class="m-auto">
                {{$posts->links()}}
             </div>
          
              
             
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                   
                       
                    
                    <div class="row blog-post-row">
                        @foreach ($postsRandom as $postRandom )
                            
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{'storage/' . $postRandom->preview_image}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{$postRandom->category->title}}</p>
                            <a href="{{route('show.index', $post->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$postRandom->title}}</h6>
                            </a>
                        </div>
                      
                        @endforeach
                    </div>
                    
                    
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-carousel">
                    <h5 class="widget-title">Популярные посты</h5>
                    <div class="post-carousel">
                       
                    </div>
                    </div>
                <div class="widget widget-post-list">
                    <h5 class="widget-title"></h5>
                    <ul class="post-list">
                        @foreach ($postsPopular as $postPopular )
                            
                        <li class="post">
                            <a href="{{route('show.index', $post->id)}}" class="post-permalink media">
                                <img src="{{'storage/' . $postPopular->preview_image}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">{{$postPopular->title}}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                      
                      
                       
                    </ul>
                </div>
             
            </div>
        </div>
    </div>
</main>
@endsection
