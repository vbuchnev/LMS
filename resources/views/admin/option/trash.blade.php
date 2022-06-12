@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Варианты ответов</h1>
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
                        <a href="{{ route('admin.option.index') }}" class="btn btn-primary">Назад</a>
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
                                        <th>Вопрос</th>
                                        <th>Ответ</th>
                                        <th>Статус ответа</th>
                                        <th>Дата удаления</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($options as $option)
                                    <tr>
                                        <td>{{ $option->id }}</td>
                                        <td>{{ $option->question->question_text }}</td>
                                        <td>{{ $option->option_text }}</td>
                                        <td>
                                            @if($option->points == 1)
                                                Верный
                                            @else
                                                Неверный
                                            @endif
                                        </td>
                                        <td>{{ $option->deleted_at }}</td>
                                        <td class="text-right">
                                            <form action="{{ route('admin.option.trash', $option->id) }}" method="POST" onsubmit="return confirm('Восстановить этот ответ?');" style="display: inline-block;">
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
