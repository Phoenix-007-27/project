@extends('layouts.main')
@section('content')

<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}} • {{$date->format('H:i')}} • {{$post->comments->count()}} Comments</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->preview_image)}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    {!!$post->content !!}
                </div>
            </div>

        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">


                <section class="comment-list">
                    <h2 class="section-title mb-5" data-aos="fade-up">Комментарии({{$post->comments->count()}})</h2>
                    @foreach ($post->comments as $comment)


                    <div class="comment-text mb-5">
                        <span class="username mb">
                            <div>
                                {{$comment->user->name}}
                            </div>
                            <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                        </span><!-- /.username -->
                      {{$comment->comment_text}}
                    </div>
                    @endforeach


                </section>
                @auth()
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
                    <form action="{{route('post.comment.store', $post->id)}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="comment_text" id="comment" class="form-control"  rows="10">Напишите комментарий!</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Отправить сообщение" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth

            <div>

                      <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                    <div class="row">
                        @foreach ($relatedPosts as $relatedPost )

                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{asset('storage/' . $relatedPost->preview_image)}}" alt="related post" class="post-thumbnail">
                            <p class="post-category">{{$relatedPost->category->title}}</p>

                            <a href="{{route('post.show', $relatedPost->id)}}" class="blog-post-permalink">

                            <h5 class="post-title">{{$relatedPost->title}}</h5></a>
                        </div>
                        @endforeach

                    </div>


                </section>
            </div>
            </div>
        </div>
    </div>
</main>
@endsection
