@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $course->title }}</h1>
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
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td class="col-3">ID</td>
                                        <td>{{ $course->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $course->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество лекции</td>
                                        <td>{{ $course->lessons()->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Список лекции</td>
                                        <td>
                                            @foreach($course->lessons as $lesson)
                                                {{ $lesson->title }};<br>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Дата создания</td>
                                        <td>{{ $course->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата редактирования</td>
                                        <td>{{ $course->updated_at }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.course.index', $course->id) }}">
                                Вернуться к списку
                            </a>

                            <a class="btn btn-info" href="{{ route('admin.course.edit', $course->id) }}">
                                Редактировать
                            </a>

                            <form action="{{ route('admin.course.delete', $course->id) }}" method="POST" onsubmit="return confirm('Удалить этот курс?');" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
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
