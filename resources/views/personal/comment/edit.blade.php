  @extends('personal.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Комментарии</li>
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
                Изменение категории
                <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="col-4">
                  @csrf
                  @method('PATCH')
                  <div class="form-group">

                      {{-- <input type="text" class="form-control" name="comment_text" id="comment_text"  placeholder="Комментарий"
                      value="{{$comment->comment_text}}"> --}}

                      <div class="form-group">
                        <textarea id="summernote" name="comment_text"> {{$comment->comment_text}}</textarea>
                      </div>

                      @error('comment_text')
                      <div class="text-danger">Это поле необходимо для заполнения</div>
                      @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Изменить">
                     </form>
          </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->

          <!-- ./col -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
