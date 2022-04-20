  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Изменение поста</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

<div class="col-12">
      Изменение поста
      <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data" class="col-4">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
            @error('title')
            <div class="text-danger">Это поле необходимо для заполнения</div>
            @enderror
          </div>

          <div class="form-group">
           <textarea id="summernote" name="content"> {{$post->content}}</textarea>
         </div>

         <div class="form-group">
             <label for="exampleInputFile">Preview Image</label>
             <div class="w-25">
             <img src="{{url('storage/' . $post->preview_image)}}" alt="preview_image" class="w-50">
             </div>
             <div class="input-group">
               <div class="custom-file">
                 <input type="file" class="custom-file-input" name="preview_image" >
                 <label class="custom-file-label" >Choose file</label>
               </div>
               <div class="input-group-append">
                 <span class="input-group-text">Upload</span>
               </div>
             </div>
           </div>

           <div class="form-group">
            <label for="exampleInputFile">Main Image</label>
            <div class="w-25">
                <img src="{{ url('storage/' . $post->main_image)}}" alt="main_image" class="w-50">
                </div>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="main_image" >
                <label class="custom-file-label" >Choose file</label>

              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>

          <div class="form-group">
        Категория
            <select class="form-control" id="category" name="category_id">
              @foreach($categories as $category)
            <option
            {{$category->id === $post->category->id ? ' selected' : ''}}
            value="{{$category->id}}">{{$category->title}}</option>
             @endforeach
             </select>
            </div>

<div class="form-group">
  Тэги
<select multiple class="form-control" id="tags_ids" name="tags_ids[]">
@foreach($tags as $tag)

    <option
    @foreach($post->tags as $postTag)
    {{$tag->id === $postTag->id ? ' selected' : ''}}
    @endforeach
    value="{{$tag->id}}">{{$tag->title}}</option>
    @endforeach
</select>
</div>

@error('tags_ids')
<div class="text-danger">Это поле необходимо для заполнения</div>
@enderror


<div class="form-group">
<input type="submit" class="btn btn-primary" value="Изменить">
</div>
</form>
</div>

          <!-- ./col -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
