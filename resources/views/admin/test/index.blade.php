@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тесты</h1>
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
                        <a href="{{ route('admin.test.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.test.trash') }}" class="btn btn-primary">Список удаленных</a>
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
                                        <th>Тест</th>
                                        <th>Лекция</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tests as $test)
                                    <tr>
                                        <td>{{ $test->id }}</td>
                                        <td>{{ $test->title }}</td>
                                        <td>{{ $test->lesson->title }}</td>
                                        <td>{{ $test->created_at  }}</td>
                                        <td class="text-right">
                                            <a class="btn btn-primary" href="{{ route('admin.test.show', $test->id) }}">
                                                Подробнее
                                            </a>

                                            <a class="btn btn-info" href="{{ route('admin.test.edit', $test->id) }}">
                                                Редактировать
                                            </a>


                                            <form action="{{ route('admin.test.delete', $test->id, $questions) }}" method="POST" onsubmit="return confirm('Удалить этот тест?');" style="display: inline-block;">
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