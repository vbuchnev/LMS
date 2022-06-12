@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Лекции</h1>
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
                        <a href="{{ route('admin.lesson.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Курс</th>
                                        <th>Лекция</th>
                                        <th>Дата удаления</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lessons as $lesson)
                                    <tr>
                                        <td>{{ $lesson->id }}</td>
                                        <td>{{ $lesson->course->title }}</td>
                                        <td>{{ $lesson->title }}</td>
                                        <td>{{ $lesson->deleted_at }}</td>
                                        <td class="text-right">
                                            <form action="{{ route('admin.lesson.restore', $lesson->id) }}" method="POST" onsubmit="return confirm('Восстановить эту лекцию?');" style="display: inline-block;">
                                                @csrf
                                                <input type="submit" class="btn btn-primary" value="Восстановить">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
