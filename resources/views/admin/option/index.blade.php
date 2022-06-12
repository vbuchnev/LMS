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
                        <a href="{{ route('admin.option.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.option.trash') }}" class="btn btn-primary">Список удаленных</a>
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
                                        <th align="right">Дата создания</th>
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
                                        <td>{{ $option->created_at }}</td>
                                        <td class="text-right">
                                            <a class="btn btn-primary" href="{{ route('admin.option.show', $option->id) }}">
                                                Подробнее
                                            </a>

                                            <a class="btn btn-info" href="{{ route('admin.option.edit', $option->id) }}">
                                                Редактировать
                                            </a>

                                            <form action="{{ route('admin.option.delete', $option->id) }}" method="POST" onsubmit="return confirm('Удалить этот ответ?');" style="display: inline-block;">
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
