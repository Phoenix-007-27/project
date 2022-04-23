@extends('layouts.main')
@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <div class="row">
             <ul>
                 @foreach ($categories as $category )
                     
                 
                 
                 <li><a href="{{route('post.category.index' , $category->id)}}">{{$category->title}}</a>
                    
                    @endforeach
             </ul>
          
              
             
        
        </div>
    </div>
</main>
@endsection
