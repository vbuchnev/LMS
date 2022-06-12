@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $lesson->title }}</h1>
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
                                        <td>{{ $lesson->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $lesson->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Курс</td>
                                        <td>{{ $lesson->course->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Кол-во тестов</td>
                                        <td>{{ $lesson->tests()->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Список тестов</td>
                                        <td>
                                            @foreach($lesson->tests as $test)
                                                {{ $test->title }};<br>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Дата создания</td>
                                        <td>{{ $lesson->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата редактирования</td>
                                        <td>{{ $lesson->updated_at }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.lesson.index', $lesson->id) }}">
                                Вернуться к списку
                            </a>
                            <a class="btn btn-info" href="{{ route('admin.lesson.edit', $lesson->id) }}">
                                Редактировать
                            </a>
                            <form action="{{ route('admin.lesson.delete', $lesson->id) }}" method="POST" onsubmit="return confirm('Удалить этот курс?');" style="display: inline-block;">
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
