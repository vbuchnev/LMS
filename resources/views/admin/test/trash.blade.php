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
                        <a href="{{ route('admin.test.index') }}" class="btn btn-primary">Назад</a>
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
                                        <th>Дата удаления</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tests as $test)
                                    <tr>
                                        <td>{{ $test->id }}</td>
                                        <td>{{ $test->title }}</td>
                                        <td>{{ $test->lesson->title }}</td>
                                        <td>{{ $test->deleted_at  }}</td>
                                        <td class="text-right">
                                            <form action="{{ route('admin.test.restore', $test->id) }}" method="POST" onsubmit="return confirm('Восстановить этот тест?');" style="display: inline-block;">
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
