@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Избранное</h1>
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
                    <div class="col-12 mb-3">
                        <a href="{{ route('lesson.index') }}" class="btn btn-primary">Перейти к лекциям</a>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lessons as $lesson)
                                        <tr>
                                            <td>{{ $lesson->id }}</td>
                                            <td>{{ $lesson->course->title }}</td>
                                            <td>{{ $lesson->title }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-primary" href="{{ route('lesson.show', $lesson->id) }}">
                                                    Подробнее
                                                </a>
                                                <form action="{{ route('personal.favorites.delete', $lesson->id) }}" method="POST" onsubmit="return confirm('Удалить этот урок из избранных?');" style="display: inline-block;">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="Удалить">
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
