  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item active">Пользователи</li>
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
            <div class="col-1 mb-3">
                <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Add</a>
        </div>
        </div>
        <div class="row"
class="col-12">

</div>
<div class="row">
    <div class="col-6">
      <div class="card">

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>

              <tr>
                <th>ID</th>
                <th>Название</th>
                <th colspan="2">Роль</th>


              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>


                    @if($user->role == 1)
                    <td>Reader</td>
                    @elseif($user->role == 0)
                    <td>Admin</td>
                    @endif


                    <td><a href="{{route('admin.user.show', $user->id)}}"><i class="far fa-eye"></td>
                    <td><a href="{{route('admin.user.edit', $user->id)}}"><i class="fas fa-pencil-alt"></td>


                    <td>
                        <form action="{{route('admin.user.delete', $user->id)}}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                       <i class="fas fa-trash text-danger" role="button"></i></td>
                       </button>
                        </form>


                @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
          <!-- ./col -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
