  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$user->name}}</h1>
           

          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item active">Пользователи</li>
              <li class="breadcrumb-item active">{{$user->name}}</li>

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

            <tbody>

                <tr>
                    <td>ID</td>
                    <td>{{$user->id}}</td>

                </tr>
                <tr>
                    <td>Название</td>
                    <td>{{$user->name}}</td>
                </tr>
               


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
